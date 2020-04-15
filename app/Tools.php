<?php

namespace App;

use App\Mail\ResetPassword;
use App\Mail\Verification;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class Tools
{
    public static function randomString()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = random_int(10000, 99999) . $characters[rand(0, strlen($characters) - 1)];
        return str_shuffle($pin);
    }

    public static function createVerificationCode()
    {
        $code = self::randomString();
        if (User::where('verification', $code)->doesntExist()) {
            return $code;
        }
        return createVerificationCode();
    }

    public static function sendVerifyCodeEmail($user, $verification_code)
    {
        self::setMailFromVerify();
        $name = $user->first_name;
        $email = $user->email;
        Mail::to($email)->later(10, new Verification($email, $name, $verification_code));
    }

    public static function sendRestPasswordEmail($user, $verification_code)
    {
        self::setMailFromVerify();
        $name = $user->first_name;
        $email = $user->email;
        Mail::to($email)->later(10, new ResetPassword($email, $name, $verification_code));
    }

    public static function setMailFromVerify()
    {
//        $existing = config('mail');
//        $existing['mailers']['smtp']['host'] = 'gator4262.hostgator.com';
//        $existing['mailers']['smtp']['port'] = '25';
////        $existing['mailers']['smtp']['encryption'] = 'tls';
//        $existing['mailers']['smtp']['username'] = 'hello@vistley.com';
//        $existing['mailers']['smtp']['password'] = 'MLo-4ZXmFua_';
//        $existing['from']['address'] = 'hello@vistley.com';
//        $existing['from']['name'] = 'Vistley';
//        config(['mail' => $existing]);

        $existing = config('mail');
        $existing['mailers']['smtp']['host'] = 'mail.visatoiran.com';
        $existing['mailers']['smtp']['port'] = '26';
//        $existing['mailers']['smtp']['encryption'] = 'tls';
        $existing['mailers']['smtp']['username'] = 'visa@visatoiran.com';
        $existing['mailers']['smtp']['password'] = 'PWwOQdq9BZ4N';
        $existing['from']['address'] = 'visa@visatoiran.com';
        $existing['from']['name'] = 'Visatoiran';
        config(['mail' => $existing]);
    }
}
