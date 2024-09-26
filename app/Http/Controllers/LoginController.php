<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function register()
    {
        $witel = $this->getWitel();
        return view('register', ["witel" => $witel]);
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required', 'unique:users,phone'],
            'area' => ['required'],
            'witel' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $model = new User();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->phone = $request->phone;
        $model->area = $request->area;
        $model->witel = $request->witel;
        $model->password = $request->password;
        $model->is_admin = 0;
        $model->is_pins = 0;
        $model->is_accepted = 0;
        $model->save();

        return back()->with('success', 'Berhasil registrasi');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img('math')]);
    }

    public function updatePassword(Request $request)
    {
        // Validate the request
        $request->validate([
            'old_password' => ['required', function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('The current password is incorrect.');
                }
            }],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        // Update the password
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password updated successfully!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'captcha' => ['required', 'captcha'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors([
                'email' => '* User belom terdaftar',
            ])->onlyInput('email');
        }

        if ($user->is_accepted == NULL || $user->is_accepted == 0) {
            return back()->withErrors([
                'email' => '* User belom terverifikasi',
            ])->onlyInput('email');
        }

        if ($user->is_pins) {
            $username = explode("@", $request->email);
            if ($this->_ldap_connect($username[0], $request->password)) {
                $user = User::where('email', $request->email)->first();
                $user->password = bcrypt($request->password);
                $user->save();
            } else {
                return back()->withErrors([
                    'email' => '* Alamat email atau password anda salah',
                ])->onlyInput('email');
            }
        }

        unset($credentials["captcha"]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            UserLogin::create([
                'user_id' => $user->id,
                'ip_address' => request()->ip(),
                'logged_in_at' => now()->setTimezone('Asia/Jakarta'),
            ]);

            if (Auth::user()->is_admin)
                return redirect()->intended('/admin/item');
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => '* Alamat email atau password anda salah',
        ])->onlyInput('email');
    }


    private function _ldap_connect($username, $password)
    {
        set_time_limit(30);

        $ad_host = "10.15.179.86";

        $ldap_connect = ldap_connect($ad_host);

        if (!$ldap_connect)
            throw new \Exception('Could not connect to ' . $$ad_host);

        $ldaprdn = 'pins' . "\\" . $username;

        ldap_set_option($ldap_connect, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap_connect, LDAP_OPT_REFERRALS, 0);

        $bind = @ldap_bind($ldap_connect, $ldaprdn, $password);

        return $bind;
    }
}
