<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class PageController extends Controller
{
    public function home(){
        $items=Item::all();
        return view('template.home',compact('items'));
    }

    public function about(){
        return view('template.about');
    }

    public function post(){
        return view('template.post');
    }

    public function contact(){
        return view('template.contact');
    }
}
