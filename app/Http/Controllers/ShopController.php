<?php
namespace App\Http\Controllers;
use App\Models\CategoryLv1;
use App\Models\GroupProduct;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
class ShopController extends Controller
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
    public function show($id)
    {
        $product = GroupProduct::find($id);
        $catagoriesLv1 = CategoryLv1::all();
        $shopListIntro = Shop::all()->take(3);
        return view('detail-product',
            ['categoriesLv1'=>$catagoriesLv1,'shopListIntro'=>$shopListIntro,'product'=>$product]);
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
}
