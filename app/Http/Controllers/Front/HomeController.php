<?php

namespace App\Http\Controllers\Front;

use App\Product;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {

        $products = Product::inRandomOrder()->get();

        return view('home.index', compact('products'));
    }

    public function product($id) {

        $product = Product::where('id', $id)->first();

        return view('home.product.index', compact('product'));
    }

    function invoice($id) {

        $order = Order::find($id);

        return view('home.invoice.invoice', compact('order'));
    }

    function howto() {
        return view('home.howto.index');
    }

    function faq() {
        return view('home.faq.index');
    }

    function suggestion() {
        return view('home.suggestion.index');
    }
}
