<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\Order;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function home($value='')
    {
        $items = Item::take(4)->get();
        $categories = Category::has('items')->get();
        $allitems = Item::all();
        $onsales = Item::all()->random(4);

        $bestsellers = DB::table('item_order')
                     ->select('item_id', DB::raw('sum(qty) as total'))
                     ->groupBy('item_id')
                     ->orderBy('total', 'desc')
                     ->take(4)
                     ->get();

        $latest_items = Item::orderby('id','desc')->take(4)->get();
        // dd($latest_items);
        return view('frontend.home',compact('items','categories','allitems','onsales','bestsellers','latest_items'));
    }

    public function shop($value='')
    {
        return view('frontend.shop');
    }

    public function cart($value='')
    {
        return view('frontend.cart');
    }

    public function detail($id)
    {
        $item=Item::find($id);
        return view('frontend.detail',compact('item'));
    }
}
