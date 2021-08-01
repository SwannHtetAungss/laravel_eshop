<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;

class FrontendController extends Controller
{
    public function home($value='')
    {
        $items = Item::take(4)->get();
        $categories = Category::has('items')->get();
        return view('frontend.home',compact('items','categories'));
    }

    public function shop($value='')
    {
        return view('frontend.shop');
    }

    public function cart($value='')
    {
        return view('frontend.cart');
    }
}
