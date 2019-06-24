<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UserPasswordRequest extends FormRequest {
     public function authorize() {
          return true;
     }

     public function rules() {
          return ['password' => 'min:6|required', 'new_password' => 'min:6|required', 'password_confirmation' => 'min:6|required|same:new_password'];
     }
}
?>