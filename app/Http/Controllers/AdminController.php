<?php
namespace App\Http\Controllers;
use App\Models\CategoryLv1;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
}
