<?php

namespace App\Http\Controllers;

use App\Models\ItemType;
use Illuminate\Http\Request;

class ItemTypeController extends Controller
{
    public function create(){
        $data = [
            'redirect' => null,
            'success' => null,
        ];
        return view('items.new-item-type')->with($data);
    }

    public function store(Request $request){
        $attr = [];
        $request->validate([
           'item_type' => 'required'
        ]);
        $elements = $request->all();
        foreach ($elements as $key => $value){
            if (preg_match('/attr/', $key)) {
                $attr[] = array($key => $value);
            }
        }
        $attributes = array(
            'attributes' => $attr
        );
        $attributesJsonString = json_encode($attributes);
        $itemType = new ItemType();
        $itemType->item_type = $request->item_type;
        $itemType->attributes = $attributes;
        $result = $itemType->save();
        if ($result){
            $data = [
                'redirect' => true,
                'success' => true,
                'message' => 'Item type added successfully!',
            ];
            return view('items.new-item-type')->with($data);
        }
        else{
            $data = [
                'redirect' => true,
                'success' => false,
                'message' => 'Unable to save data !',
            ];
            return view('items.new-item-type')->with($data);
        }
    }
}
