<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == 'super_admin') {
                return redirect()->route('super_admin.index');
            } elseif ($user->level == 'admin') {
                return redirect()->route('admin.index');
            } elseif ($user->level == 'user') {
                return redirect()->route('user.index');
            }
        }
        return view('login.login');
    }

    // public function proses_logins(Request $request)
    // {
    //     $messages = [
    //         'email.required' => 'Email is required!',
    //         'password.required' => 'Password is required!'
    //     ];
    //     request()->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ], $messages);

    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();
    //         $this->authenticated($request, $user); // <-- tambahkan baris ini
    //         if ($user->level == 'super_admin') {
    //             return redirect()->intended('super_admin.index');
    //         } elseif ($user->level == 'admin') {
    //             return redirect()->intended('admin.index');
    //         } elseif ($user->level == 'user') {
    //             return redirect()->intended('user.index');
    //         }
    //     }

    //     return $this->sendFailedLoginResponse($request)->withErrors([
    //         'email' => 'Credentials do not match our records.',
    //     ]);
    // }

    public function proses_login(Request $request)
    {
        $messages = [
            'email.required' => 'Email is required!',
            'password.required' => 'Password is required!'
        ];
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->level == 'super_admin') {
                return redirect()->route('super_admin.index');
            } elseif (auth()->user()->level == 'admin') {
                return redirect()->route('admin.index');
            } elseif (auth()->user()->level == 'user') {
                return redirect()->route('user.index');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect('/login');
    }
}
