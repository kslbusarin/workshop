@extends('layouts.app')

@section('content')
<div class='container'>
    <h1>Company</h1>

<div class="col text-left">
    <a class="btn btn-secondary" href="{{route('company.create')}}" role="button">Ceate Company</a>
    <a class="btn btn-secondary" href="{{route('customer.index')}}" role="button">All Customer</a>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Company_ID</th>
          <th scope="col">Company_Name</th>
          <th scope="col">Company_Address</th>
          <th scope="col">Option</th>
        </tr>
      </thead>

<tbody>
    @forelse ($companys as $company)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$company->company_id}}</td>
      <td>{{$company->company_name}}</td>
      <td>{{$company->company_address}}</td>
      <td>
        {{-- <a class="btn btn-primary" href="/company/customer/{{$company->company_id}} " role="button">Customer</a> --}}
        <a class="btn btn-primary" href="/company/edit/{{$company->company_id}} " role="button">Edit</a>
        <form method="POST" action="{{route('company.destroy' , ['company_id' => $company->company_id])}}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger mx-1" >Delete</button>
            {{-- <a class="btn btn-primary" href="/product/delete/{{$product->product_id}} " role="button">Delete</a> --}}

        </form>
      </td>

    </tr>
    @empty
    <tr>
        <td colspan="4"> no product</td>
    </tr>
@endforelse
</tbody>
</table>
@endsection
