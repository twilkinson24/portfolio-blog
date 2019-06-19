<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryEditRequest;
use App\Category;
use App\Article;

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
          try {
               return view('admin/categories/create');
          } catch(\Exception $e) {
               flash('Error. Try again.', 'danger');
               return redirect()->route('categories.main');
          }
     }

     public function store(CategoryRequest $request) {
          try {
              $category = new Category($request->all());
              $category->save();
              flash('Category created!');
              return redirect()->route('categories.main');
          } catch(\Exception $e) {
               flash('Error. Try again.', 'danger');
               return redirect()->route('categories.main');
          }
     }

     public function edit($id) {
          try {
               $category = Category::find($id);
              if($category) {
                    return view('admin/categories/update', ['category' => $category]);
              } else {
                    flash('Error. Category not found.', 'danger');
                    return redirect()->route('categories.main');
              }
           } catch(\Exception $e) {
                    flash('Error. Try again.', 'danger');
                    return redirect()->route('categories.main');
           }
     }

     public function update(CategoryEditRequest $request, $id) {
          try {
               $category = Category::find($id);
               $category->fill($request->all());
               $category->save();
              flash('Category updated', 'primary');
              return redirect()->route('categories.main');
           } catch(\Exception $e) {
                    flash('Error. Try again.', 'danger');
                    return redirect()->route('categories.main');
           }
     }

     public function show($id) {
          try {
               $category = Category::find($id);
               if($category) {
                    return view('admin/categories/view', ['category' => $category]);
               } else {
                    flash('Error. Category not found.', 'danger');
                    return redirect()->route('categories.main');
               }
          } catch(\Exception $e) {
               flash('Error. Try again.', 'danger');
               return redirect()->route('categories.main');
          }
     }

     public function destroy($id) {
          try {
               $category = Category::find($id);
               $articles = Article::where('category_id', $category->id)->get();
               if($articles->count() == 0) {
                    $category->delete();
                    flash('Category deleted', 'primary');
                    return redirect()->route('categories.main');
               } else {
                    flash('Error. Category could not be deleted. Related articles', 'danger');
                    return redirect()->route('categories.main');
               }
          } catch(\Exception $e) {
               flash('Error. Try again.', 'danger');
               return redirect()->route('categories.main');
          }
     }
}

?>