<?php

namespace App\Http\Controllers;

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
        $users = User::all();
        return view('admin.user.index', ['users' => $users]);
    }

    /**
     * Display a listing of the resource.
     */
    public function logView(Request $request)
    {
        $query = $request->input('query');
        if ($request->query != null) {
            $logs = UserLogin::with(['user'])
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
        return view('admin.user.create');
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
        $model->is_admin = $request->is_admin;
        $model->is_pins = $request->is_pins;
        $model->password = $request->password;
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
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->is_admin = $request->is_admin;
        $user->is_pins = $request->is_pins;
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
}
