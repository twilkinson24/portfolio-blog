<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest {
     public function authorize() {
          return true;
     }

     public function rules() {
          return ['title' => 'max:255|required', 'image' => 'required', 'summary' => 'max:255|required', 'description' => 'required'];
     }
}
?>