<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WelcomeController extends Controller {
     public function __construct() {
          session_start();
          if(isset($_SESSION['lang']) && !empty(isset($_SESSION['lang'])))  {
               \App::setLocale($_SESSION['lang']);
          } else {
               \App::setLocale('en');
          }
     }

     public function setLanguage($id) {
          try {
               $_SESSION['lang'] = $id;
               // function will be in JS file
               return response()->json([]); 
          } catch(\Exception $e) {
               return view('welcome');
          }
     }

     public function index() {
          return view('welcome');
     }
}


?>