<?php  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\UserRequests;
use App\Http\Requests\UserEditRequest;
use App\User;
use App\Article;
use App\Role;

class UserController extends Controller {
    public function __construct() {
     $this->middleware('auth');
     }
    public function index() {
        try {
            $records = User::orderBy('id', 'desc')->paginate(3);
            return view('admin/users/index', ['users' => $records]);
        } catch(\Exception $e) {
            return view('admin/index');
        }
     }
    public function create() {
        try {
        $roles = Role::orderBy('name')->get();
            return view('admin/users/create', ['userRoles' => $roles]);
        } catch(\Exception $e) {
            return redirect()->route('users.main');
        }
    }
    public function store(UserRequests $request) {
         try {
            $user = new User($request->all());
            $user->password = bcrypt($user->password);
            $user->save();
            return redirect()->route('users.main');
        } catch(\Exception $e) {
            return redirect()->route('users.main');
         }
     }
    public function show($id) {
        try {
            $user = User::find($id);
            if($user) {
                $role = Role::find($user->role_id);
                $name = Role::find($user->name);
                return view('admin/users/view', ['user' => $user, 'role' => $role, 'name' => $name]);
            } else {
                return redirect()->route('users.main');
            }
        } catch(\Exception $e) {
            return redirect()->route('users.main');
        }
     }    
    public function edit($id) {
        try {  
            $user = User::find($id);
            if($user) {
                $roles = Role::orderBy('name')->get();
                return view('admin/users/update', ['user' => $user, 'roles' => $roles]);
            } else {
                return redirect()->route('users.main');
            }
        } catch(\Exception $e) {
            return redirect()->route('users.main');
        }
     } 

    public function update(UserEditRequest $request, $id) {
         try {
            $user = User::find($id);
            $user->fill($request->all());
            $user->save();

            return redirect()->route('users.main');
         } catch(\Exception $e) {
            return redirect()->route('users.main');
        }
     } 

     public function destroy($id) {        
          try {
            $user = User::find($id);
            $articles = Article::where('user_id', $user->id)->get();

            if($articles->count() == 0) {
                $user->delete();
            } 

            return redirect()->route('users.main');

          } catch(\Exception $e) {
            return redirect()->route('users.main');
        }
     } 
}

?>