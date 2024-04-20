<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemTypeController extends Controller
{
    public function create(){
        return view('items.new-item-type');
    }
}
