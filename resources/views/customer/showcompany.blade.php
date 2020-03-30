@extends('layouts.app')

@section('content')
<div class='container'>
    <h1>All Company</h1>
<table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Company_ID</th>
          <th scope="col">Company_Name</th>
          <th scope="col">Company_Address</th>
        </tr>
      </thead>

<tbody>
    @forelse ($companys as $company)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$company->company_id}}</td>
      <td>{{$company->company_name}}</td>
      <td>{{$company->company_address}}</td>


    </tr>
    @empty
    <tr>
        <td colspan="4"> no product</td>
    </tr>
@endforelse
</tbody>
</table>
<a class="btn btn-primary" href="{{route('customer.index')}}" role="button">Back</a>
@endsection
