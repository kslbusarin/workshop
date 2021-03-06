@extends('layouts.app')

@section('content')
<div class='container'>
    <h1>Customer</h1>
<div class="col text-left">
    <a class="btn btn-primary" href="{{route('customer.create')}}" role="button">Ceate</a>
    <a class="btn btn-primary" href="{{route('customer.showcompany')}}" role="button">Company</a>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Cusatomer_ID</th>
          <th scope="col">Customer_Name</th>
          <th scope="col">Customer_Tel</th>
          <th scope="col">Company_ID</th>
          <th scope="col">Company_Name</th>
          <th scope="col">Option</th>
        </tr>
      </thead>

<tbody>
    @forelse ($customers as $customer)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$customer->customer_id}}</td>
      <td>{{$customer->customer_name}}</td>
      <td>{{$customer->customer_tel}}</td>
      <td>{{$customer->company_id}}</td>
      <td>{{$customer->company->company_name}}</td>
      <td>
        <a class="btn btn-primary" href="/customer/edit/{{$customer->customer_id}} " role="button">Edit</a>
      </td>

    </tr>
    @empty
    <tr>
        <td colspan="6"> no product</td>
    </tr>
@endforelse
</tbody>
</table>
@endsection
