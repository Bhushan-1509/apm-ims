<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function create(){
        return view('orders.create-purchase-order');
    }

    public function store(Request $request){
        dd($request);
    }

}
