<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img('math')]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'captcha' => ['required', 'captcha'],
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user->is_pins) {
            $username = explode("@", $request->email);
            if ($this->_ldap_connect($username[0], $request->password)) {
                $user = User::where('email', $request->email)->first();
                $user->password = bcrypt($request->password);
                $user->save();
            } else {
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ])->onlyInput('email');
            }
        }

        unset($credentials["captcha"]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->is_admin)
                return redirect()->intended('/admin/item');
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
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

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
