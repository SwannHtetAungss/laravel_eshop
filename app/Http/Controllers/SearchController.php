<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if($request->ajax()){

            $searchData = $request->data;

            $data = DB::table('items')->where('name','like','%'.$searchData.'%')
                    ->orWhere('description','like','%'.$searchData.'%')
                    ->get();

            return response()->json($data);
        }
    }
}
