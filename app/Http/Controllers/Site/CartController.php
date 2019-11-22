<?php

namespace App\Http\Controllers\Site;

use App\Models\CategoryLv1;
use App\Models\GroupProduct;
use App\Models\Shop;
use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function getCart()
    {
        $catagoriesLv1 = CategoryLv1::all();
        $shopListIntro = Shop::all()->take(3);
        return view('site.pages.cart',[
            'categoriesLv1' => $catagoriesLv1,
            'shopListIntro' => $shopListIntro,
            'cartCount' =>Cart::session(Auth::user()->id)->getContent()->count()
        ]);
    }
    public function getQuickFormAddToCart($id){
        return view('component.cart.quick-add-to-cart-form',['product'=>GroupProduct::find($id)]);
    }
    public function removeItem($id)
    {
        Cart::session(Auth::user()->id)->remove($id);

        if (Cart::isEmpty()) {
            return redirect('/');
        }
        return redirect()->back()->with('message', 'Item removed from cart successfully.');
    }
    public function clearCart()
    {
        Cart::session(Auth::user()->id)->clear();

        return redirect('/');
    }
}
