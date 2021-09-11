<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\Order;
use Illuminate\Support\Facades\DB;
use App\Subcategory;

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
        $categories = Category::has('items')->get();
        $items = Item::all();
        return view('frontend.shop',compact('categories','items'));
    }

    public function categoryFilter(Request $request)
    {
        
        $cat_id=$request->cat_id;
        // dd($cat_id);

        $subcategories = Subcategory::where('category_id',$cat_id)->get();
        $items = Item::all();
        
        // return $subcategories;

        return ['subcategories'=>$subcategories,'items'=>$items];
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
