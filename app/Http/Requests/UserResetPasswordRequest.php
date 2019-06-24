<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UserResetPasswordRequest extends FormRequest {
     public function authorize() {
          return true;
     }

     public function rules() {
          return ['password' => 'min:6|required', 'password_confirmation' => 'min:6|required|same:password'];
     }
}
?>