<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
     protected $table = 'articles';
     protected $fillable = ['title', 'image', 'alt_image', 'summary', 'description', 'state_id', 'author_id', 'user_id', 'category_id'];

     public function state() {
          return $this->belongsTo('App\State');
     }

     public function category() {
          return $this->belongsTo('App\Category');
     }

     public function user() {
          return $this->belongsTo('App\User');
     }
     
     public function author() {
          return $this->belongsTo('App\Author');
     }
}
?>