<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model {
     protected $table = 'authors';
     protected $fillable = ['name', 'image'];

     public function articles() {
          return $this->hasMany('App\Article');
     }
}


?>