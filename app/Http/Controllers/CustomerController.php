<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        if(auth()->user()->isAdmin()) {
            return view('customer.index',compact('customers'));
        } else {
            return view('customer.indexuser',compact('customers'));
        }
         //dd($products);

    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $data = request()->validate(
            ['customer_id' => 'required',
            'customer_name'=>'required',
            'customer_tel'=>'required',
            'company_id'=>'required',
            'company_name'=>'null',
            ]
        );
        $customer = new Customer();
        $customer->customer_id = $data['customer_id'];
        $customer->customer_name  = $data['customer_name'];
        $customer->customer_tel = $data['customer_tel'];
        $customer->company_id = $data['company_id'];
        $customer->company_name = $customer->company->company_name;
        $customer->save();
        return redirect('customer');

    }
    public function edit($customer_id=null)
    {
        $customer = Customer::where('customer_id', $customer_id)->first();
         //dd($customer->customer_id);
        return view('customer.edit', compact('customer'));

        // $customer = DB::table('customers')->where('customer_id', $customer_id)->first();
        // return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $customer_id )
    {
    //        $customer = Customer::where('customer_id', $customer_id)->get()->first();
    //        dd($customer->customer_id);
    //        $customer->customer_id = $request->customer_id;
    //        $customer->customer_name = $request->customer_name;
    //        $customer->customer_tel = $request->customer_tel;
    //        $customer->company_id = $request->company_id;
    //        $customer->company_name = $request->company_name;
    //        $customer->save();
    //        return Redirect('customer');

           DB::table('customers')
            ->where('customer_id', $customer_id)
            ->update(['customer_id' => $request->customer_id, 'customer_name' => $request->customer_name,
            'customer_tel'=>$request->customer_tel, 'company_id'=>$request->company_id,]);
        return Redirect('customer');
    }

    public function destroy($customer_id )
    {
// dd($product);
        // DB::table('products')
        //     ->where('product_id', $products_id)
        //     ->delete();
        // return Redirect('product');
        $customer = Customer::where('customer_id',$customer_id);
        $customer->delete();
        return Redirect('customer');

    }

    public function showcompany()
    {
        $companys = Company::all();
        return view('customer.showcompany', compact('companys'));

    }

}
