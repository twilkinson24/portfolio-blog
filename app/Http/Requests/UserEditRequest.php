<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\User;

class UserEditRequest extends FormRequest {
     public function authorize() {
          return true;
     }

     public function rules() {
          $user = User::find($this->id);

          return ['name' => 'max:255|required', 'email' => 'max:255|required|unique:users,email,'.$user->id];
     }
}


?>