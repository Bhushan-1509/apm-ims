<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Item;
use App\Models\ItemType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Testing\Fakes\MailFake;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       if (request()->method() == 'GET')
       {
            $items = Item::all();
            // SR NO.	COMPANY NAME	ITEM NAME	ITEM TYPE	RATE	EDIT	DELETE
            $itemArray = array(
            );
            $companyList = [];
            $data = array();
            foreach($items as $item)
            {   
                $company = Company::find($item->company_id);
                $cItem = json_decode($item['items'],true);
                $itemDetails = $cItem['items'][0];
                $companyName = $company->company_name;
                $companyList[] = $companyName;
                for($i = 0; $i < sizeof($itemDetails); $i++){
                    $colon_position = strpos($itemDetails[$i], ":");
                    $substring_before_colon = null;
                    $substring_after_colon = null;
                    if ($colon_position !== false) {
                        $substring_before_colon = substr($itemDetails[$i], 0, $colon_position);
                        $substring_before_colon = substr($substring_before_colon, 0, -2);
                    }
                    if (preg_match('/:(.*)/', $itemDetails[$i], $matches)) {
                        $substring_after_colon = $matches[1];
                        // Output: "xyz"
                    } 
                    $itemArray[$substring_before_colon] = $substring_after_colon;

                }
                $itemType = ItemType::find($itemArray['item_type'])->item_type;
                $itemArray['company_name'] = $companyName;
                $itemArray['item_type']   = $itemType;
                $data[] = $itemArray;
                // $itemsArray['']
            }
            // dd($data);
            return view('items.item-table', ['items' => $data]);
       }

    }

    public function deleteItem(){
        $company = Company::where('company_name', request()->post('company_name_hidden'))->first();
        dd($company->company_id);
        $items = Item::where('company_id', $company->company_id)->first();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        $itemTypes = ItemType::all();
        $data = [
            'redirect' => false,
            'success' => true,
            'message' => 'Item added successfully!',
        ];
        return view('items.new-item', ['companies' => $companies, 'item_types' => $itemTypes])->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attr = [];
        $validatedData = $request->validate([
            'company_id' => 'required'
        ]);
        $elements = $request->all();
        foreach ($elements as $key => $value) {
            if (preg_match('/item/', $key) or preg_match('/rate/', $key)) {
                $attr[] = $key . ":" . $value;
            }
        }

        $items = array(
            'items' => (array($attr))
        );

        $item = new Item();
        $item->company_id = $validatedData['company_id'];
        $item->items = json_encode($items);
        $result = $item->save();
        if ($result){
            $data = [
                'redirect' => true,
                'success' => true,
                'message' => 'Item added successfully!',
            ];
            $companies = Company::all();
            $itemTypes = ItemType::all();
//            return view('items.new-item', ['companies' => $companies, 'item_types' => $itemTypes])->with($data);
            $data =
                ['companies' => $companies, 'item_types' => $itemTypes, 'redirect' => true,
                'success' => true,
                'message' => 'Item added successfully!',];
            return redirect()->route('items.index')->with($data);

        }
        else{
            $data = [
                'redirect' => true,
                'success' => false,
                'message' => 'Unable to save data !',
            ];
            $companies = Company::all();
            $itemTypes = ItemType::all();
            return view('items.new-item', ['companies' => $companies, 'item_types' => $itemTypes])->with($data);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
