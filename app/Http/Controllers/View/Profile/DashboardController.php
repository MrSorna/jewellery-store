<?php

namespace App\Http\Controllers\View\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserChangeDetails;
use App\Http\Requests\UserChangePassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->check()) {
            $user = auth()->user();
            return view('site.profile.dashboard', ['user' => $user]);
        } else
            return redirect(LaravelLocalization::getCurrentLocale() . '/login-register');
    }


    public function changePassword(UserChangePassword $request)
    {
        if (auth()->check()) {
            $user = auth()->user();
            if ($user) {
                $data['password'] = Hash::make($request->input('new_password'));
                $user->update($data);
                return response('', 200);
            }
        }
        return redirect(LaravelLocalization::getCurrentLocale() . '/login-register');
    }

    public function changeDetails(UserChangeDetails $request)
    {
        if (auth()->check()) {
            $user = auth()->user();
            if ($user) {
                $data['first_name'] = $request->input('first_name');
                $data['last_name'] = $request->input('last_name');
                $data['address'] = $request->input('address');
                $data['phone'] = $request->input('phone');
                $user->update($data);
                return response('', 200);
            }
        }
        return redirect(LaravelLocalization::getCurrentLocale() . '/login-register');
    }

}
