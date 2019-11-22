<?php

namespace App\Http\Controllers;

use App\Enums\ProductColor;
use App\Models\CategoryLv1;
use App\Models\CategoryLv2;
use App\Models\GroupProduct;
use App\Models\Product;
use App\Models\Province;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use Tymon\JWTAuth\Http\Parser\AuthHeaders;
use function Faker\Provider\pt_BR\check_digit;

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
        if (Auth::check()){
                if (Auth::user()->role_id==1) {
                    return redirect()->route('admin.dashboard');
                }
        }
        $categoriesLv1 = CategoryLv1::all();
        $shopListIntro = Shop::all()->take(3);
        $bestSellerProducts = GroupProduct::with('shop')
            ->join('reviews', 'groups_product.id', '=', 'reviews.group_product_id')
            ->selectRaw('AVG(reviews.number_star) avg_number_star,
                         groups_product.id, 
                         groups_product.shop_id, 
                         groups_product.name,
                         groups_product.image_1')
            ->groupBy(
                'groups_product.id',
                'groups_product.shop_id',
                'groups_product.name',
                'groups_product.image_1')
            ->get()
            ->take(20);
        $latestProducts = $bestSellerProducts;
        $recommendedProducts = $bestSellerProducts;

        return view('home',
            [
                'categoriesLv1' => $categoriesLv1,
                'shopListIntro' => $shopListIntro,
                'bestSellerProducts' => $bestSellerProducts,
                'latestProducts' => $latestProducts,
                'recommendedProducts' => $recommendedProducts,
                'cartCount' => Auth::check()?Cart::session(Auth::user()->id)->getContent()->count():null
            ]
        );
    }

    public function listCate1($id)
    {
        $categoriesLv1 = CategoryLv1::all();
        $shopListIntro = Shop::all()->take(3);
        $productsCate1 = GroupProduct::where('_lv1_id', $id)->paginate(12);
        return view('-result', ['categoriesLv1' => $categoriesLv1, 'shopListIntro' => $shopListIntro,
            'productsCate1' => $productsCate1]);
    }

    public function shopping($cate1, $cate2 = null, Request $request)
    {
        //for header
        $categoriesLv1 = CategoryLv1::all();
        $shopListIntro = Shop::all()->take(3);

        //for filter block
        $filterColors = ProductColor::getValues();
        $childCategories = $cate2 == null ? CategoryLv1::where('slug', '=', $cate1)->first()->categoriesLv2 : null;

        if (!$request->ajax()) {
            if ($cate2 == null) {
                $products = GroupProduct::join('categories_lv1', 'categories_lv1.id', '=', 'groups_product.category_lv1_id')
                    ->join('reviews', 'groups_product.id', '=', 'reviews.group_product_id')
                    ->where('categories_lv1.slug', '=', $cate1)
                    ->selectRaw('AVG(reviews.number_star) avg_number_star,
                                             groups_product.id,
                                             groups_product.shop_id,
                                             groups_product.name,
                                             groups_product.image_1')
                    ->groupBy(
                        'groups_product.id',
                        'groups_product.shop_id',
                        'groups_product.name',
                        'groups_product.image_1')
                    ->paginate(12);
            } else {
                $products = GroupProduct::join('categories_lv1', 'categories_lv1.id', '=', 'groups_product.category_lv1_id')
                    ->join('categories_lv2', 'categories_lv2.id', '=', 'groups_product.category_lv2_id')
                    ->join('reviews', 'groups_product.id', '=', 'reviews.group_product_id')
                    ->where('categories_lv1.slug', '=', $cate1)
                    ->where('categories_lv2.slug', '=', $cate2)
                    ->selectRaw('AVG(reviews.number_star) avg_number_star,
                                             groups_product.id,
                                             groups_product.shop_id,
                                             groups_product.name,
                                             groups_product.image_1')
                    ->groupBy(
                        'groups_product.id',
                        'groups_product.shop_id',
                        'groups_product.name',
                        'groups_product.image_1')
                    ->paginate(12);
            }
            return view('site.pages.browse-to-category',
                [
                    'childCategories' => $childCategories,
                    'filterColors' => $filterColors,
                    'products' => $products,
                    'categoriesLv1' => $categoriesLv1,
                    'shopListIntro' => $shopListIntro,
                    'cartCount' => Cart::session(Auth::user()->id)->getContent()->count()
                ]);
        }
        else {
            if($this->checkNoFilterChoice($cate2,$request)){
                abort(500,'no choice for filter');
            };
            $products = GroupProduct::with('products')
                ->join('categories_lv1', 'categories_lv1.id', '=', 'groups_product.category_lv1_id')
                ->join('reviews', 'groups_product.id', '=', 'reviews.group_product_id')
                ->where('categories_lv1.slug', '=', $cate1)
                ->selectRaw('AVG(reviews.number_star) avg_number_star,
                                             groups_product.id,
                                             groups_product.shop_id,
                                             groups_product.name,
                                             groups_product.image_1')
                ->groupBy(
                    'groups_product.id',
                    'groups_product.shop_id',
                    'groups_product.name',
                    'groups_product.image_1');
            $childCategory = $request->childCategory;
            $currentChild = $childCategory && $childCategories ? $childCategories->where('id','=',$childCategory)[0]:null;
            $currentColor = $color = $request->color;
            $currentPriceFrom = $priceFrom = $request->price_from;
            $currentPriceTo = $priceTo = $request->price_to;

            if ($color || $priceTo || $priceFrom) {
                $products = $products->join('products', 'groups_product.id', 'products.group_product_id');
                if ($priceFrom) {
                    $products = $products->where('products.price', '>' ,$priceFrom);
                }
                if ($priceTo) {
                    $products = $products->where('products.price', '<' ,$priceTo);
                }
                if ($color) {
                    $products = $products->where('products.color', $color);
                }
            }
            if ($cate2 == null) {
                if ($childCategory) {
                    $products = $products->join('categories_lv2', 'categories_lv2.id', '=', 'groups_product.category_lv2_id')
                        ->where('categories_lv2.id', '=', $childCategory);
                }

            } else {
                $products = $products->join('categories_lv2', 'categories_lv2.id', '=', 'groups_product.category_lv2_id')
                    ->where('categories_lv2.slug', '=', $cate2);
            }
            $products = $products->paginate(12);
            //dd($childCategory, $color, $province!='00' ,$priceFrom, $priceTo,$request->page);
            return view('component.product.list_product_cate',
                [
                    'currentChild'=>$currentChild,
                    'currentColor'=>$currentColor,
                    'currentPriceFrom' => $currentPriceFrom,
                    'currentPriceTo' =>$currentPriceTo,
                    'childCategories' => $childCategories,
                    'filterColors' => $filterColors,
                    'products' => $products,
                ]);
        }
    }
    public function checkNofilterChoice($cate2 ,Request $request){
        if($cate2==null){
            if($request->childCategory||$request->price_from||$request->price_to||
                $request->color||$request->province) return false;
        }else{
            if($request->price_from||$request->price_to||
                $request->color||$request->province) return false;
        }
        return true;
    }
}
