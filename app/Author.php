<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {
     protected $table = 'authors';
     protected $fillable = ['id', 'name', 'image', 'create_at', 'updated_at'];

     public function articles() {
          return $this->belongsToMany('App\Article');
     }
}


?>