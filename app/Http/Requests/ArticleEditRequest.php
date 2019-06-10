<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ArticleEditRequest extends FormRequest {
     public function authorize() {
          return true;
     }

     public function rules() {
          return ['title' => 'max:255|required', 'alt_image' => 'max:255|required', 'summary' => 'max:255|required', 'description' => 'required'];
     }
}


?>