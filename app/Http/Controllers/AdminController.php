<?php  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Article;

class AdminController extends Controller {
     public function __construct() {
          $this->middleware('auth');
     }
     public function index() {
          $userCount = User::orderBy('id')->get()->count();
          $articleCount = Article::orderBy('id')->get()->count();
          return view('/admin/index', ['userCount' => $userCount, 'articleCount' => $articleCount]);
     }
}

?>