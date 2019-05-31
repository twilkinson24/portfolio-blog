<?php
namespace App\Http\Controllers;
use App\Article;
use App\Author;
use DB;

class PublicArticleController extends Controller {
     public function __construct() {
          
     }

     public function publicIndex($text = null) {
          if($text != null) {

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