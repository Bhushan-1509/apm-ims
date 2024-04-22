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
//            dd(request()->query('search'));
            $companies = Company::query()->where('company_name','LIKE',request()->query('search'))->get();
//            dd($companies);
            return view('company.company-table', ['companies' => $companies])->with('redirect', false);
        }
        $companies = Company::all();
        return view('company.company-table', ['companies' => $companies])->with('redirect', false);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create-company', ['company' => null])->with('redirect', false);
    }

    public function listCompanies(){
        return array('companies' => Company::all()->jsonSerialize());
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
//        dd($request->input('company_name'));
        $existingCompany = Company::where([
            ['company_name', '=', $validatedData['company_name']],
            ['address', '=', $validatedData['address']],
        ])->first();
        if($existingCompany){
            $result = $existingCompany->update($validatedData);
            $data = [
                'redirect' => true,
                'success' => true,
                'message' => 'Record updated successfully!',
            ];


//            return view('company.company-table', ['companies' => Company::all()])->with($data);
            return redirect()->route('company.index')->with(['success' => true, 'message' => 'Record updated successfully !', 'redirect' => true, 'companies' => Company::all(), 'edited' => true]);

        }
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

    public function editCompany($id){
        if (request()->method() == 'GET'){
            $company = Company::find($id);
            return view('company.create-company', ['company' => $company])->with('redirect', false);
        }
        else if (request()->method() == 'POST'){
            $validatedData = request()->validate([
                'company_name' => 'required|string',
                'address' => 'required|string',
                'company_type' => 'required|string',
            ]);

            $id = request()->input('company_id');
            $company = Company::find($id);
            dd($company);



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
