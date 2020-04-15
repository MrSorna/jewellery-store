<?php

namespace App\Http\Controllers\View\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\Role;
use App\Models\User;
use App\Tools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LoginRegisterController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->check())
            return redirect(LaravelLocalization::getCurrentLocale() . '/dashboard');
        else
            return view('site.profile.login_register');
    }

    public function login(UserLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return response('Login Successfully', 200);
        } else {
            return response('Incorrect Username or Password.', 401);
        }
    }

    public function register(UserRegisterRequest $request)
    {
        $role = Role::where('name', 'customer')->first();
        $verification = Tools::createVerificationCode();
        $request['role_id'] = $role->id;
        $request['verification'] = $verification;
        $request['active'] = false;
        $request['password'] = Hash::make($request->input('password'));
        $user = User::create($request->toArray());
        if ($user) {
            Tools::sendVerifyCodeEmail($user, $verification);
            return response('', 200);
        } else {
            return response('', 400);
        }
    }

    public function verify(Request $request)
    {
        $email = $request->query('email');
        $verification = $request->query('code');
        if (!$email | !$verification) {
            return redirect(LaravelLocalization::getCurrentLocale() . '/login-register');
        }
        $user = User::where('email', $email)->first();
        if ($user) {
            if (!$user->isActive()) {
                if ($user->verification != null && $user->verification != '' && $user->verification == $verification) {
                    $user->update(['active' => true, 'verification' => null]);
                    Auth::login($user);
                    return view('site.profile.verify', ['result' => true, 'msg' => 'Verification code is correct']);
                } else {
                    return view('site.profile.verify', ['result' => false, 'msg' => 'Verification code is incorrect']);
                }
            } else {
                return view('site.profile.verify', ['result' => false, 'msg' => 'This user has already been verified']);
            }
        } else {
            return view('site.profile.verify', ['result' => false, 'msg' => 'Verification code is incorrect']);
        }
    }


    public function forget(Request $request)
    {
        $email = $request->query('email');
        if (!$email) {
            return redirect(LaravelLocalization::getCurrentLocale() . '/login-register');
        }
        $user = User::where('email', $email)->first();
        if ($user) {
            if ($user->isActive()) {
                $verification = Tools::createVerificationCode();
                $data['verification'] = $verification;
                $user->update($data);
                Tools::sendRestPasswordEmail($user, $verification);
                return response('', 200);
            } else {
                return view('site.profile.verify', ['result' => false, 'msg' => 'This user not active']);
            }
        } else {
            return view('site.profile.verify', ['result' => false, 'msg' => 'Verification code is incorrect']);
        }
    }

    public function resetPasswordView(Request $request)
    {
        return view('site.profile.forget_password');
    }

    public function resetPassword(Request $request)
    {
        Auth::logout();
        return redirect(LaravelLocalization::getCurrentLocale() . '/home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(LaravelLocalization::getCurrentLocale() . '/home');
    }
}
