<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

use App\Brand;
use App\Subcategory;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        // dd($items);
        return view('backend.item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $subcategories = Subcategory::all();
        return view('backend.item.create',compact('brands','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // validation
        $request->validate([
            "name" => "required|unique:items|max:191|min:5",
            "codeno" => "required|unique:items|max:191|min:5",
            "price" => "required",
            "discount" => "sometimes",
            "description" => "required",
            "brand" => "required|exists:brands,id",
            "subcategory" => "required|exists:subcategories,id",
            "photo" => "required|mimes:jpeg,jpg,png"
        ]);

        // upload file
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // itemimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('itemimg', $fileName, 'public');

        }

        // data insert
        $item = new Item; // create new object
        $item->name = $request->name;
        $item->codeno = $request->codeno;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->brand_id = $request->brand;
        $item->subcategory_id = $request->subcategory;
        $item->photo = $filePath;
        $item->save();

        // redirect
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $brands = Brand::all();
        $subcategories = Subcategory::all();
        return view('backend.item.edit',compact('item','brands','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        // dd($request);

        // validation
        $request->validate([
            "name" => "required|max:191|min:5",
            "codeno" => "required|max:191|min:5",
            "price" => "required",
            "discount" => "sometimes",
            "description" => "required",
            "brand" => "required|exists:brands,id",
            "subcategory" => "required|exists:subcategories,id",
            "photo" => "sometimes|mimes:jpeg,jpg,png"
        ]);

        // upload file
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // itemimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('itemimg', $fileName, 'public');

            // Delete old photo (try yourself)
            unlink(public_path('storage/').$item->photo);
            
        }else{
            $filePath = $item->photo;
        }

        // data insert
        $item->name = $request->name;
        $item->codeno = $request->codeno;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->brand_id = $request->brand;
        $item->subcategory_id = $request->subcategory;
        $item->photo = $filePath;
        $item->save();

        // redirect
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        // redirect
        return redirect()->route('item.index');
    }
}
