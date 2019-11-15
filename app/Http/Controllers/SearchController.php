<?php

namespace App\Http\Controllers;

use App\Models\CategoryLv1;
use App\Models\GroupProduct;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index(Request $request){
        $catagoriesLv1 = CategoryLv1::all();
        $category =explode('-',$request->category_id);
        if($category[0] == 0){
            $products = GroupProduct::with('shop')
                ->join('shops','groups_product.shop_id','=','shops.id')
                ->join('reviews', 'groups_product.id', '=', 'reviews.group_product_id')
                ->selectRaw('AVG(reviews.number_star) avg_number_star,
                                             groups_product.id, 
                                             groups_product.shop_id, 
                                             groups_product.name,
                                             groups_product.price,
                                             groups_product.image_1')
                ->groupBy('groups_product.id',
                    'groups_product.shop_id',
                    'groups_product.name',
                    'groups_product.price',
                    'groups_product.image_1')
                ->where(
                    'shops.name','like','%'.$request->key_search.'%')
                ->orWhere(
                    'groups_product.name','like','%'.$request->key_search.'%')
                ->paginate(24);
        }
        elseif (!isset($category[1])){
            $products = GroupProduct::with('shop')
                ->join('shops','groups_product.shop_id','=','shops.id')
                ->join('reviews', 'groups_product.id', '=', 'reviews.group_product_id')
                ->selectRaw('AVG(reviews.number_star) avg_number_star,
                                             groups_product.id, 
                                             groups_product.shop_id, 
                                             groups_product.name,
                                             groups_product.price,
                                             groups_product.image_1')
                ->groupBy('groups_product.id',
                    'groups_product.shop_id',
                    'groups_product.name',
                    'groups_product.price',
                    'groups_product.image_1')
                ->where(
                    'shops.name','like','%'.$request->key_search.'%')
                ->orWhere(
                    'groups_product.name','like','%'.$request->key_search.'%')
                ->where('groups_product.category_lv1_id','=',$category[0])
                ->paginate(24);
        }
        else{
            $products = GroupProduct::with('shop')
                ->join('shops','groups_product.shop_id','=','shops.id')
                ->join('reviews', 'groups_product.id', '=', 'reviews.group_product_id')
                ->selectRaw('AVG(reviews.number_star) avg_number_star,
                                             groups_product.id, 
                                             groups_product.shop_id, 
                                             groups_product.name,
                                             groups_product.price,
                                             groups_product.image_1')
                ->groupBy('groups_product.id',
                    'groups_product.shop_id',
                    'groups_product.name',
                    'groups_product.price',
                    'groups_product.image_1')
                ->where(
                    'shops.name','like','%'.$request->key_search.'%')
                ->orWhere(
                    'groups_product.name','like','%'.$request->key_search.'%')
                ->where('groups_product.category_lv1_id','=',$category[0])
                ->where('groups_product.category_lv2_id','=',$category[1])
                ->paginate(24);
        }


        return view('search-result',['categoriesLv1' => $catagoriesLv1,'products'=>$products]);
    }
}
