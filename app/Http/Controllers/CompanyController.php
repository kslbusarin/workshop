<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function index()
    {
        $companys = Company::all();
        return view('company.index' , compact('companys'));
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $data = request()->validate(
            ['company_id' => 'required',
            'company_name'=>'required',
            'company_address'=>'required',]
        );
        $company = new Company();
        $company->company_id = $data['company_id'];
        $company->company_name  = $data['company_name'];
        $company->company_address  = $data['company_address'];
        $company->save();
        return redirect('company');
    }

    public function edit(Request $request, $company_id)
    {
        $company = Company::where('company_id', $company_id)->get()->first();
        return view('company.edit', compact('company'));

    }
    public function update(Request $request, $company_id )
    {


        //    $company = Company::where('company_id', $company_id)->get()->first();
        //     dd($company->company_name = $request->company_name);
        //    $company->company_id = $request->company_id;
        //    $company->company_name = $request->company_name;
        //    $company->company_address = $request->company_address;
        //    $company->save();

        //    return Redirect('company');

           DB::table('companies')
            ->where('company_id', $company_id)
            ->update(['company_id' => $request->company_id, 'company_name' => $request->company_name,
            'company_address'=>$request->company_address]);
        return Redirect('company');
    }

    public function destroy($company_id )
    {
// dd($product);
        // DB::table('products')
        //     ->where('product_id', $products_id)
        //     ->delete();
        // return Redirect('product');
        $company = Company::where('company_id',$company_id);
        $company->delete();
        return Redirect('company');

    }

    public function showcustomer($company_id)
    {
        $companys = Company::where('company_id', $company_id)->get()->first();
        // dd($companys->company_name);
        // $companys = Company::all();
        return view('company.customer', compact('companys'));
    }
}
