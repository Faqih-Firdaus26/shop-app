<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class FrontendController extends Controller
{
    public function index(Request $request) {
        $products = Product::with(['galleries'])->latest()->get();

        return view('pages.frontend.index', compact('products'));
    }

    public function details(Request $request, $slug) {
        $product = Product::with(['galleries'])->where('slug', $slug)->firstOrFail();
        $recomendations = Product::with(['galleries'])->inRandomOrder()->limit(4)->get();

        return view('pages.frontend.details', compact('product', 'recomendations'));
    }

    public function cartAdd(Request $request, $id){
        Cart::create([
            'users_id' => Auth::user()->id,
            'products_id' => $id,
        ]);

        return redirect('cart');
    }

    public function cartDelete(Request $request, $id){
        $item = Cart::findorfail($id);
        $item ->delete();
        return redirect('cart');
    }

    public function cart(Request $request) {
        $carts = Cart::with(['product.galleries'])->where('users_id', Auth::user()->id)->get();

        return view('pages.frontend.cart', compact('carts'));
    }

    public function success(Request $request) {
        return view('pages.frontend.success');
    }


    
}