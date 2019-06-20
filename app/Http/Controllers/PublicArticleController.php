<?php
namespace App\Http\Controllers;
use App\Article;
use App\Author;
use App\Category;
use DB;

class PublicArticleController extends Controller {
     public function __construct() {
          
     }

     public function publicIndex($text = null) {
          if($text != null) {
               // if $test isn't null, filter by category
               $category = Category::where('name', $text)->get();
               $articles = Article::where('state_id', 2)->where('category_id', $category[0]->id)->orderBy('id', 'desc')->get();
               return view('articles/blog', ['articles' => $articles]);
          } else {
               $articles = Article::where('state_id', 2)->orderBy('id', 'desc')->get();
               return view('articles/blog', ['articles' => $articles]);
          }
     }

     public function description($title, $id) {
          try {
               $article = Article::find($id);
               if($article) {
                    $author = Author::find($article->author_id);
                    return view('articles/singleArticle', ['article' => $article, 'author' => $author]);
               } else {
                    return view('welcome');
               }
          } catch(\Exception $e) {
               return view('welcome');
          }
     }
}

?>