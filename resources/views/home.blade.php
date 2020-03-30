@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are user logged in!
                </div>
            </div>
        </div>
        <div>
            <a class="btn btn-primary" href="{{route('customer.index')}}" role="button">customer</a>
        </div>
    </div>
</div>

@endsection
