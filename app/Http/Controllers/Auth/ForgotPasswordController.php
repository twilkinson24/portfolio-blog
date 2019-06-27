<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Http\Requests\UserResetPasswordRequest;
use Illuminate\Support\Facades\Input;
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
        try {
            $user = User::where('email', Input::get('email'))->get();
            if(count($user) > 0) {
                $passwordReset = new PasswordReset();
                $passwordReset->email = Input::get('email');
                $passwordReset->token = Input::get('_token');
                $passwordReset->save();

                $data = array('token' => Input::get('_token'));
                $emailTo = Input::get('email');
                $recipient = "To user";
                $sender = "admin@twilkinson.com";
                $admin = "Admin";

                Mail::send('emails.password', $data, function($message) use($emailTo, $recipient, $sender, $admin) {
                    $message->to($emailTo, $recipient);
                    $message->from($sender, $admin);
                    $message->subject('twilkinson.com - Change Password');
                });
                flash('Success. Email sent.', 'primary');
                return redirect()->route('password.getemail');
            } else {
                flash('Error. Email not recognized.', 'danger');
                return redirect()->route('password.getemail');
            }
        } catch(\Exception $e) {
            flash('Error. Try again.', 'danger');
            return redirect()->route('password.getemail');
        }
    }

    public function getReset($token) {
        try {
            return view('auth/passwords/reset', ['token' => $token]);
        } catch(\Exception $e) {
            return view('welcome');
        }
    }

    public function postReset(UserResetPasswordRequest $request) {
        try {
            $user = new User($request->all());
            $passwordReset = PasswordReset::where('email', Input::get('email'))->where('token', Input::get('token'))->get();
            $users = User::where('email', Input::get('email'))->get();
            if(count($passwordReset) > 0) {
                foreach($users as $user) {
                    $user->password = bcrypt(Input::get('password'));
                    $user->save();
                }
            }
            return view('welcome');
        } catch(\Exception $e) {
            return view('welcome');
        }
    }
}
