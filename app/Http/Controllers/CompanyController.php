<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->query('search')){
            $company = Company::query()->find(request()->query('search'));
            dd($company);
        }
        $companies = Company::all();
        return view('company.company-table', ['companies' => $companies])->with('redirect', false);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create-company')->with('redirect', false);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'company_name' => 'required|string',
            'address' => 'required|string',
            'company_type' => 'required|string',
        ]);
        $company = new Company();
        $company->company_name = $validatedData['company_name'];
        $company->address = $validatedData['address'];
        $company->company_type = $validatedData['company_type'];

        $company->save();
        if ($company->wasRecentlyCreated) {
            $data = [
                'success' => true,
                'message' => 'Data saved successfully !',
            ];

            return view('company.new-company')->with($data);
        } else {
            $data = [
                'success' => false,
                'message' => 'Unable to save data !',
            ];

            return view('company.new-company')->with($data);

        }
    }

    public function search(Request $request){
        $company = Company::query()->find($request->query('search'));
        dd($company);
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

    public function deleteCompanyInstance(){
        $company = Company::query()->find(request()->input('company_id'));
        if($company->delete()) {
            return redirect()->route('company.index')->with(['success' => true, 'message' => 'Company deleted successfully !', 'redirect' => true]);
        }
        else{
            return redirect()->route('company.index')->with(['success' => false, 'message' =>'Not able to delete company', 'redirect' => false]);
        }

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
        $company = Company::query()->find($id)->first();
        dd($company);
        try {
            $company->delete();
            return redirect()->route('company.index')->with('success', 'Company deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('company.index')->with('error', 'Failed to delete company. Please try again.');
        }
    }
}
