<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UserRequests extends FormRequest {
     public function authorize() {
          return true;
     }

     public function rules() {
          return ['name' => 'max:255|required', 'email' => 'max:255|required|unique:users', 'password' => 'min:6|required', 'password_confirmation' => 'min:6|required|same:password'];
     }
}


?>