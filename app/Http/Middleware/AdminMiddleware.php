<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class AdminMiddleware {
     protected $auth;

     public function __construct(Guard $auth) {
          $this->auth = $auth;
     }

     public function handle($request, Closure $next) {
          switch($this->auth->user()->role_id) {
               case "1": 
               // Administrator
               break;
               case "2": 
               // Editor
               break;
               default: 
               $this->auth->logout(); // 
               if($request->ajax()) {
                    return response('not authorized', 401);
               } else {
                    return redirect()->to('login');
               }
               break;
          }
          return $next($request);
     }

}


?>

