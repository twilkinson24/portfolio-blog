<?php  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleEditRequest;
use App\User;
use App\Article;
use App\Author;
use App\State;
use App\Category;
use Carbon\Carbon;

class ArticleController extends Controller {
    public function __construct() {
     $this->middleware('auth');
     }
    public function index() {
        try {
            $articles = Article::orderBy('id', 'desc')->paginate(5);
            return view('admin/articles/index', ['articles' => $articles]);

        } catch (\Exception $e) {
            return view('admin/index');
        }
     }
    public function create() {
        try {
            $states = State::orderBy('id')->get();
            $authors = Author::orderBy('id')->get();
            $categories = Category::orderBy('id')->get();
            return view('admin/articles/create', ['states' => $states, 'authors' => $authors, 'categories' => $categories]);
        } catch (\Exception $e) {
            flash('Error creating post. Try again.', 'danger');
            return redirect()->route('articles.main');
        }
     }
    public function store(ArticleRequest $request) {
        try {
            $article = new Article($request->all());
            $article->user_id = \Auth::user()->id;

            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_extension = \File::extension($file_name);
            $time = $this->getTimeName();
            $new_file_name = $time . '.' . $file_extension;

            while(\Storage::exists($new_file_name)) {
                $time = $this->getTimeName();
                $new_file_name = $time . '.' . $file_extension;
            }

            \Storage::disk('local')->put($new_file_name, \File::get($file));
            $article->image = $new_file_name;
            $article->save();

            flash('Post successfully added.', 'success');
            return redirect()->route('articles.main');   
        } catch (\Exception $e) {
            flash('Error. Post not created.', 'danger');
            return redirect()->route('articles.main');        
        }
     }
    public function show($id) {
        try {
            $article = Article::find($id);
            if($article) {
                $state = State::find($article->state_id);
                $author = Author::find($article->author_id);
                $category = Category::find($article->category_id);
                return view('admin/articles/view', ['article' => $article, 'state' => $state, 'author' => $author, 'category' => $category]);
            } else {
                flash('Post not found.', 'danger');
                return redirect()->route('articles.main');      
            }
        } catch (\Exception $e) {
            flash('Error. Try again.', 'success');
            return redirect()->route('articles.main');        
        }
     }    
    public function edit($id) {
        try {
            $article = Article::find($id);
            if($article) {
                $states = State::orderBy('name')->get();
                $authors = Author::orderBy('name')->get();
                $categories = Category::orderBy('name')->get();
                return view('admin/articles/update', ['article' => $article, 'states' => $states, 'authors' => $authors, 'categories' => $categories]);
            } else {
                flash('Post not found.', 'danger');
                return redirect()->route('articles.main');        
            }
        } catch (\Exception $e) {
            flash('Error. Post not updated.', 'danger');
            return redirect()->route('articles.main');        
        }
     } 
    public function update(ArticleEditRequest $request, $id) {
        try {
           $article = Article::find($id);

           $article_image = "";
           if ($article->image != null) {
                $article_image = $article->image;
           }

           $article->fill($request->all());

           // Change Article Image
           $file = $request->file('image');

           if($file != null) {
               $file_name = $file->getClientOriginalName();
               $file_extension = \File::extension($file_name);

                $time = $this->getTimeName();
                $new_file_name = $time . '.' . $file_extension;
                while(\Storage::exists($new_file_name)) {
                    $time = $this->getTimeName();
                    $new_file_name = $time . '.' . $file_extension;
                }

                \Storage::disk('local')->put($new_file_name, \File::get($file));

                // Delete the old image
                if($article_image != "") {
                    \Storage::delete($article_image);
                }
                $article->image = $new_file_name;
           }
           $article->save();

           flash('Error. Post not updated.', 'danger');
           return redirect()->route('articles.main');        
        } catch (\Exception $e) {
            flash('Error. Try again.', 'danger');
            return redirect()->route('articles.main');        
        }
     } 
     public function destroy($id) {
        try {
            $article = Article::find($id);
            \Storage::delete($article->image);
            $article->delete();

            flash('Post deleted successfully.', 'success');
            return redirect()->route('articles.main'); 
        } catch (\Exception $e) {
            flash('Error. Post not deleted. Try again.', 'danger');
            return redirect()->route('articles.main');        
        }     
     } 
     
     public function getTimeName() {
         $time = Carbon::now()->toDateTimeString();
         $time = str_replace('-', '', $time);
         $time = str_replace(':', '', $time);
         $time = str_replace(' ', '', $time);

         return $time;
     }
}

?>
