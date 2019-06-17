<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use Mail;
use App\Mail\TestEmail;

class ContactController extends Controller {
     public function __construct() {

     }

     public function send() {
          try {
               $data = ['name' => Input::get('name'), 'email' => Input::get('email'), 'msg' => Input::get('msg')];
               Mail::to(config('app.contact_mail'))->send(new TestEmail($data));
              // flash('Message sent correctly. Thanks!');
               return view('contact');
          } catch (\Exception $e){
               echo $e;
               // flash('Error. Message not sent.', 'danger');
               return view('contact');
          }    
     }
}




?>