<?php
namespace App\Http\Controllers;
use App\Models\CategoryLv1;
use App\Models\Profile;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users',compact('users'));
    }
    public function multiDelete(Request $request)
    {
        User::destroy($request->data);
        Profile::whereIn('user_id',$request->data)->delete();
        $users = User::all();
        return view('admin.user-management.list-user',compact('users'));
    }
    public function show(Request $request, $id)
    {
        $user = User::find($id);
        return response()->json(
            [
                'status' => 'success',
                'user' => $user->toArray()
            ], 200);
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'required|unique:users|email|max:255',
        ]);
        $user = new User();
        $profile = new Profile();
        $user->email = $request->email;
        $user->password = bcrypt('123456');
        if ($request->isAdmin){
           $user->isAdmin = true;
        }
        $user->save();
        $profile->user_id = $user->id;
        $profile->save();
    }
    public function myAccount(){
        $categoriesLv1 = CategoryLv1::all();
        return view('my-account.my-account',['categoriesLv1'=>$categoriesLv1]);    }
}
