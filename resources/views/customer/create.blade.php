@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('customer.store') }}">
    @csrf
    <div class="col-md-6 offset-md-3">
    <div class="form-group">
      <label for="customer">Add customer</label>
      <input class="form-control" type="text" placeholder="customer_id" id="customer_id" style="width: 500px;" name='customer_id' value="{{old('customer_id')}}">
    @if($errors->first('customer_id'))
      <span class="helper-text" style="color:red" data-error="wrong" data-success="right">{{$errors->first('customer_id')}} </span>
    @endif
    </div>
    <div class="form-group">
    <input class="form-control" type="text" placeholder="customer_name" id="customer_name" style="width: 500px;" name="customer_name" value="{{old('customer_name')}}">

    @if($errors->first('customer_name'))
        <span class="helper-text" style="color:red" data-error="wrong" data-success="right">{{$errors->first('customer_name')}}</span>
    @endif
    </div>
    <div class="form-group">
        <input class="form-control" type="text" placeholder="customer_tel" id="customer_tel" style="width: 500px;" name="customer_tel" value="{{old('customer_tel')}}">

        @if($errors->first('customer_tel'))
            <span class="helper-text" style="color:red" data-error="wrong" data-success="right">{{$errors->first('customer_tel')}}</span>
        @endif
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="company_id" id="company_id" style="width: 500px;" name="company_id" value="{{old('company_id')}}">

            @if($errors->first('company_id'))
                <span class="helper-text" style="color:red" data-error="wrong" data-success="right">{{$errors->first('company_id')}}</span>
            @endif
            </div>
            {{-- <div class="form-group">
                <input class="form-control" type="text" placeholder="company_name" id="company_name" style="width: 500px;" name="company_name" value="{{old('company_name')}}">

                @if($errors->first('company_name'))
                    <span class="helper-text" style="color:red" data-error="wrong" data-success="right">{{$errors->first('company_name')}}</span>
                @endif
                </div> --}}


    <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </form>
@endsection
