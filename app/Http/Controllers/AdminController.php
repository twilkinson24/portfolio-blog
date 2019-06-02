<?php  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Article;
use App\Author;

class AdminController extends Controller {
     public function __construct() {
          $this->middleware('auth');
     }
     public function index() {
          $userCount = User::orderBy('id')->get()->count();
          $articleCount = Article::orderBy('id')->get()->count();
          $authorCount = Author::orderBy('id')->get()->count();
          // $user = User::select('name')->pluck('name')->take(1);
          return view('/admin/index', ['userCount' => $userCount, 'articleCount' => $articleCount, 'authorCount' => $authorCount /* 'user' => $user */]);

     }
}

?>