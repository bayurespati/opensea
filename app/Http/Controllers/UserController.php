<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Exports\UserLogExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\UserLogin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('is_accepted', "=", 1)->get();
        return view('admin.user.index', ['users' => $users]);
    }

    /**
     * Display a listing of register user.
     */
    public function getUserRegister()
    {
        $users = User::where('is_accepted', "=", 0)->get();
        return view('admin.user.register', ['users' => $users]);
    }

    /**
     * Display a listing of the resource.
     */
    public function logView(Request $request)
    {
        $query = $request->input('query');
        if ($request->query != null) {
            $users = User::where('name', 'like', '%' . $query . '%')->get()->pluck('id');
            $logs = UserLogin::whereIn('user_id', $users)
                ->with(['user'])
                ->paginate(10)
                ->appends(['query' => $query]);
        } else
            $logs = UserLogin::with(['user'])->paginate(10);
        return view('admin.log.user.index', ['logs' => $logs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $witel = $this->getWitel();
        return view('admin.user.create', ['witel' => $witel]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $model = new User();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->phone = $request->phone;
        $model->area = $request->area;
        $model->witel = $request->witel;
        $model->is_admin = $request->is_admin;
        $model->is_pins = $request->is_pins;
        $model->password = $request->password;
        $model->is_accepted = 1;
        $model->save();

        return redirect('/admin/user');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate((new UpdateUserRequest())->rules($user));
        $encryptedEmail = Crypt::encryptString($request->email);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->is_admin = $request->is_admin;
        $user->is_pins = $request->is_pins;
        $user->is_accepted = $request->is_accepted;
        $user->save();

        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('message', 'User ' . $user->nama . ' barhasil dihapus');
    }

    public function downloadLog(Request $request)
    {
        try {
            return Excel::download(new UserLogExport(), "user_logs.xlsx");
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function download(Request $request)
    {
        try {
            return Excel::download(new UserExport(), "users.xlsx");
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
