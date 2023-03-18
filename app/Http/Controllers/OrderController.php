<?php

namespace App\Http\Controllers;

use App\Models\OrderModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //assign the data to the variable using model
        $data = OrderModel::all();
        
        //sending data to the viewa
        return view('Orders.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Orders.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'shipping_address' => 'required',

        ]);

        //creating all the request in the database using model
            OrderModel::create ($request->all());

            //after creating the data, it returing the view blade
            return redirect()->route('orders.index')->with('success', 'Item added successfully.');
            // session key is success it will used by the view 
  

    }

    /**
     * Display the specified resource.
     */
    public function show(OrderModel $orderModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = OrderModel::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderModel $item)
    {

        //validation to ignore empty inputs
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    
        $item->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderModel $item)
    {
        $item->delete();
    }
}
