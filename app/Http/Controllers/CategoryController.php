<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryEditRequest;
use App\Category;

class CategoryController extends Controller {
     public function __construct() {
          $this->middleware('auth');
     }

     public function index() {
          try {
               $categories = Category::orderBy('id', 'desc')->paginate(10);
               return view('admin/categories/index', ['categories' => $categories]);
          } catch(\Exception $e) {
               return view('admin/index');
          }
     }

      public function create() {
          
     }

     public function store() {
          
     }

     public function edit() {
          
     }

     public function update() {
          
     }

     public function show() {
          
     }

     public function destroy() {
          
     }
}

?>