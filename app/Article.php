<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
     protected $table = 'articles';
     protected $fillable = ['title', 'image', 'alt_image', 'summary', 'description', 'state_id', 'author_id', 'user_id'];

     public function state() {
          return $this->belongsTo('App\State');
     }

     public function user() {
          return $this->belongsTo('App\User');
     }
     
     public function author() {
          return $this->belongsTo('App\Author');
     }
}


?>