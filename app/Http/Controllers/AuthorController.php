<?php  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\AuthorRequest;
use App\Http\Requests\AuthorEditRequest;
use App\Article;
use App\Author;
use Carbon\Carbon;

class AuthorController extends Controller {
    public function __construct() {
     $this->middleware('auth');
     }
    public function index() {
        try {
            $authors = Author::orderBy('id', 'desc')->paginate(5);
            return view('admin/authors/index', ['authors' => $authors]);

        } catch (\Exception $e) {
            return view('admin/index');
        }
     }
    public function create() {
        try {
            return view('admin/authors/create');
        } catch (\Exception $e) {
            return redirect()->route('authors.main');
        }
     }
    public function store(AuthorRequest $request) {
        try {
            $author = new Author($request->all());

            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_extension = \File::extension($file_name);
            $time = $this->getTimeName();
            $new_file_name = $time . '.' . $file_extension;

            while(\Storage::exists($new_file_name)) {
                $time = $this->getTimeName();
                $new_file_name = $time . '.' . $file_extension;
            }

            \Storage::disk('local')->put($new_file_name, \File::get($file));
            $author->image = $new_file_name;
            $author->save();

            return redirect()->route('authors.main');   
        } catch (\Exception $e) {
            return redirect()->route('authors.main');        
        }
     }
    public function show($id) {
        try {
            $author = Author::find($id);
            if($author) {
                return view('admin/authors/view', ['author' => $author]);
            } else {
                return redirect()->route('authors.main');      
            }
        } catch (\Exception $e) {
            return redirect()->route('authors.main');        
        }
     }    
    public function edit($id) {
        try {
            $author = Author::find($id);
            if($author) {
                return view('admin/authors/update', ['author' => $author]);
            } else {
                return redirect()->route('authors.main');        
            }
        } catch (\Exception $e) {
            return redirect()->route('authors.main');        
        }
     } 
    public function update(AuthorEditRequest $request, $id) {
        try {
           $author = Author::find($id);

           $author_image = "";
           if ($author->image != null) {
                $author_image = $author->image;
           }

           $author->fill($request->all());

           // Change Article Image
           $file = $request->file('image');

           if($file != null) {
               $file_name = $file->getClientOriginalName();
               $file_extension = \File::extension($file_name);

                $time = $this->getTimeName();
                $new_file_name = $time . '.' . $file_extension;
                while(\Storage::exists($new_file_name)) {
                    $time = $this->getTimeName();
                    $new_file_name = $time . '.' . $file_extension;
                }

                \Storage::disk('local')->put($new_file_name, \File::get($file));

                // Delete the old image
                if($author_image != "") {
                    \Storage::delete($author_image);
                }
                $author->image = $new_file_name;
           }
           $author->save();
           return redirect()->route('authors.main');        

        } catch (\Exception $e) {
            return redirect()->route('authors.main');        
        }
     } 
     public function destroy($id) {
          try {
               $author = Author::find($id);
               $articles = Article::where('author_id', $author->id)->get();
   
               if($articles->count() == 0) {
                   \Storage::delete($author->image); 
                   $author->delete();
               } 
               return redirect()->route('authors.main');
             } catch(\Exception $e) {
               return redirect()->route('authors.main');
           }   
     } 
     
     public function getTimeName() {
         $time = Carbon::now()->toDateTimeString();
         $time = str_replace('-', '', $time);
         $time = str_replace(':', '', $time);
         $time = str_replace(' ', '', $time);

         return $time;
     }
}

?>