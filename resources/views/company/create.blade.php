@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('company.store') }}">
    @csrf
<div class="col-md-6 offset-md-3">
    <div class="form-group">
      <label for="CompanyName">Add Company</label>
      <input class="form-control" type="text" placeholder="Company_id" id="company_id" style="width: 500px;" name='company_id' value="{{old('company_id')}}">
    @if($errors->first('company_id'))
      <span class="helper-text" style="color:red" data-error="wrong" data-success="right">{{$errors->first('company_id')}} </span>
    @endif
    </div>
    <div class="form-group">
    <input class="form-control" type="text" placeholder="Company_name" id="company_name" style="width: 500px;" name="company_name" value="{{old('company_name')}}">
    @if($errors->first('company_name'))
        <span class="helper-text" style="color:red" data-error="wrong" data-success="right">{{$errors->first('company_name')}}</span>
    @endif
    </div>
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Company_address" id="company_address" style="width: 500px;" name='company_address' value="{{old('company_address')}}">
      @if($errors->first('company_address'))
        <span class="helper-text" style="color:red" data-error="wrong" data-success="right">{{$errors->first('company_address')}} </span>
      @endif
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </form>
@endsection
