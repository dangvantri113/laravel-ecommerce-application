<?php

namespace App\Http\Controllers;

use App\Models\CategoryLv1;
use App\Models\GroupProduct;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $catagoriesLv1 = CategoryLv1::all();
        $shopListIntro = Shop::all()->take(3);
        return view('home',['categoriesLv1'=>$catagoriesLv1,'shopListIntro'=>$shopListIntro]);
    }
    public function listCate1($id){
        $catagoriesLv1 = CategoryLv1::all();
        $shopListIntro = Shop::all()->take(3);
        $productsCate1 = GroupProduct::where('_lv1_id',$id)->paginate(12);
        return view('-result',['categoriesLv1'=>$catagoriesLv1,'shopListIntro'=>$shopListIntro,
            'productsCate1'=>$productsCate1]);
    }
}
