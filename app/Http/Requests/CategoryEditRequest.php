<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Category;

class CategoryEditRequest extends FormRequest {
     public function authorize() {
          return true;
     }

     public function rules() {
          $category = Category::find($this->id);
          return ['name' => 'max:255|required|unique:categories,name,' . $category->id];
     }
}

?>