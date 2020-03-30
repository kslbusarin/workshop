@extends('layouts.app')

@section('content')
{{-- {{dd($companys->company_id)}} --}}
<div class='container'>
    <h1>Customer</h1>

<table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Cusatomer_ID</th>
          <th scope="col">Customer_Name</th>
          {{-- <th scope="col">Customer_Tel</th> --}}
        </tr>
      </thead>

<tbody>
    @forelse ($companys as $company)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$company->customer->customer_id}}</td>
      <td>{{$company->customer->customer_name}}</td>
      {{-- <td>{{$company->customer->customer_tel}}</td> --}}


    </tr>
    @empty
    <tr>
        <td colspan="3"> no product</td>
    </tr>
@endforelse
</tbody>
</table>
@endsection
