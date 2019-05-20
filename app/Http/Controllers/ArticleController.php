<?php  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleEditRequest;
use App\User;
use App\Article;
use App\State;

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

     }
    public function store() {
         
     }
    public function show() {

     }    
    public function edit() {

     } 
    public function update() {
         
     } 
     public function destroy() {
          
     } 
}

?>