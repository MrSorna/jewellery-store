<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\MyException;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        if ($user) {
            $credentials = $request->only('email', 'password');
            if(\Request::is('api*')){
                $token = auth('api')->attempt($credentials);

                return $token;
            }else{
                if (Auth::attempt($credentials)) {
                    return '<html><body>hello</body></html>';
                }
            }
        }
    }


    public function isLogin()
    {
        if (auth()->check() && auth()->user())
            return auth()->user();
        else
            return 'false';
    }
}
