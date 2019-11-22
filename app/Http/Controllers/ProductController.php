<?php
namespace App\Http\Controllers;
use App\Models\CategoryLv1;
use App\Models\GroupProduct;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = GroupProduct::paginate(10);
        return view('component.list-product',['products'=>$products]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->ajax()){
            $product = Product::where('group_product_id','=',$id);
            if($request->color!=null){
                $product = $product->where('color','=',$request->color);
            }
            if($request->size!=null){
                $product = $product->where('size','=',$request->size);
            }
            return $product->first();
        }

        $product = GroupProduct::find($id);
        $categoriesLv1 = CategoryLv1::all();
        $shopListIntro = Shop::all()->take(3);
        return view('detail-product',
            [
                'categoriesLv1'=>$categoriesLv1,'shopListIntro'=>$shopListIntro,
                'product'=>$product,'cartCount' =>Auth::check()?Cart::session(Auth::user()->id)->getContent()->count():null
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addToCart(Request $request)
    {
        $product = GroupProduct::find($request->input('group-product-id'));
        $options = $request->except('_token', 'group-product-id', 'price');

        Cart::session(Auth::user()->id)->add(array(
            'id' => uniqid(),
            'name' => 'Sample Item',
            'price' => 67.99,
            'quantity' => 4,
            'attributes' => array()
        ));

        return redirect()->back()->with('message', 'Item added to cart successfully.');
    }

}
