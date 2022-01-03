<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Mail\NewOrder;
use DB;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //LOAD THE VIEW FROM; FETCH DATA FROM DB
        $orders = DB::select('SELECT * FROM orders');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //LOAD A VIEW
        return view('pages.order');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //SAVING DATA TO DB
        $order = new Order;
        $order->customerEmail = $request->input('customerEmail');
        $order->customerName = $request->input('customerName');
        $order->customerAddress = $request->input('customerAddress');
        $order->customerIG = $request->input('customerIG');
        $order->customerNo = $request->input('customerNo');
        $order->MOD = $request->input('MOD');
        $order->MOP = $request->input('MOP');
        $order->productPurchased = $request->input('productPurchased');
        $order->save();
    
        //SENDING DATA TO EMAIL
        Mail::send(new NewOrder($order));

        return redirect('/order')->with('success','Thank you! Your order has been successfully processed. We will just contact you.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //FETCH FROM THE DATABASE
        $order = Order::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //MY METHOD
}
