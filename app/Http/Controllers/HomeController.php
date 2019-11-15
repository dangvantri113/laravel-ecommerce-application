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
        $bestSellerProducts = GroupProduct::with('shop')->join('reviews', 'groups_product.id', '=', 'reviews.group_product_id')
            ->selectRaw('AVG(reviews.number_star) avg_number_star,
                         groups_product.id, 
                         groups_product.shop_id, 
                         groups_product.name,
                         groups_product.price,
                         groups_product.image_1')
            ->groupBy(
                'groups_product.id',
                      'groups_product.shop_id',
                      'groups_product.name',
                      'groups_product.price',
                      'groups_product.image_1')
            ->get()
            ->take(20);
        $latestProducts = GroupProduct::all()->take(20);
        $commendedProducts = GroupProduct::all()->take(20);
        //dd($bestSellerProducts);
        return view('home',
            [
                'categoriesLv1' => $catagoriesLv1,
                'shopListIntro' => $shopListIntro,
                'bestSellerProducts' => $bestSellerProducts,
                'latestProducts'=> $latestProducts,
                'commendedProducts'=>$commendedProducts
            ]
        );
    }
    public function listCate1($id){
        $catagoriesLv1 = CategoryLv1::all();
        $shopListIntro = Shop::all()->take(3);
        $productsCate1 = GroupProduct::where('_lv1_id',$id)->paginate(12);
        return view('-result',['categoriesLv1'=>$catagoriesLv1,'shopListIntro'=>$shopListIntro,
            'productsCate1'=>$productsCate1]);
    }
}
