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
                return view('admin/users/view', ['user' => $user, 'role' => $role]);
            } else {
                return redirect()->route('users.main');
            }
        } catch(\Exception $e) {
            return redirect()->route('users.main');
        }
     }    
    public function edit() {

     } 
    public function update() {
         
     } 
     public function destroy() {
          
     } 
}

?>