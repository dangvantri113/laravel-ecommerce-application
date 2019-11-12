<?php
namespace App\Http\Controllers;
use App\Models\CategoryLv1;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json(
            [
                'status' => 'success',
                'users' => $users->toArray()
            ], 200);
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
    public function myAccount(){
        $catagoriesLv1 = CategoryLv1::all();
        return view('my-account.my-account',['categoriesLv1'=>$catagoriesLv1]);    }
}
