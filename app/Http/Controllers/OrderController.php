<?php

namespace App\Http\Controllers;

use App\Order;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

use App\Mail\MyMail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('backend.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        DB::transaction(function () use ($request) {
            $shop_arr = json_decode($request->data);
            // dd($shop_arr);
            // return 'Success';

            // insert Orders
            $order = new Order;
            $order->orderdate = date('Y-m-d');
            $order->voucherno = time();
            $order->total = $request->total;
            $order->note = '';
            $order->status = 0;
            $order->user_id = Auth::id();
            $order->save();

            // insert item_order
            foreach ($shop_arr as $item) {
                $order->items()->attach($item->id, ['qty' => $item->qty]);
            }
        });

        return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $items = $order->items;
        return view('backend.order.detail', compact('items', 'order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        // return view('backend.order.detail');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        // dd($order);
        $order->status = $request->status;
        $order->save();

        if ($request->status == 1) {
            $details = [
                'title' => 'Order Confirmed',
                'customer_name' => $order->user->name,
                'voucher_no' => $order->voucherno,
                'order_date' => $order->orderdate,
                'total' => $order->total,
                'items' => $order->items
            ];
        } else {
            $details = [
                'title' => 'Order Cancelled',
                'customer_name' => $order->user->name
            ];
        }


        $receiver_email = $order->user->email;
        \Mail::to($receiver_email)->send(new \App\Mail\MyMail($details));

        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
