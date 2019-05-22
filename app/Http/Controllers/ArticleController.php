<?php  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleEditRequest;
use App\User;
use App\Article;
use App\State;
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
            return view('admin/articles/create', ['states' => $states]);
        } catch (\Exception $e) {
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

            return redirect()->route('articles.main');   
        } catch (\Exception $e) {
            return redirect()->route('articles.main');        
        }
     }
    public function show($id) {
        try {
            $article = Article::find($id);
            if($article) {
                $state = State::find($article->state_id);
                return view('admin/articles/view', ['article' => $article, 'state' => $state]);
            } else {
                return redirect()->route('articles.main');      
            }
        } catch (\Exception $e) {
            return redirect()->route('articles.main');        
        }
     }    
    public function edit($id) {
        try {
            $article = Article::find($id);
            if($article) {
                $states = States::orderBy('name')->get();
                return view('admin/articles/update', ['article' => $article, 'states' => $states]);
            } else {
                return redirect()->route('articles.main');        
            }
        } catch (\Exception $e) {
            return redirect()->route('articles.main');        
        }
     } 
    public function update() {
         
     } 
     public function destroy() {
          
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