<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Http\Requests\UserResetPasswordRequest;
use Illiminate\Support\Facades\Input;
use Mail;
use App\User;
use App\PasswordReset;
use DB;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getEmail() {
        try {
            return view('auth/passwords/email');
        } catch(\Exception $e) {
            return view('welcome');
        }
    }

    public function postEmail() {

    }

    public function getReset($token) {

    }

    public function postReset(UserResetPasswordRequest $request) {

    }
}
