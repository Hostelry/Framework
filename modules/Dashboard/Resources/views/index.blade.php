@extends('adminlte::page')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Overview</h1>
        </div>
        <div class="col-sm-6">
            <a href="#" class="btn btn-primary btn-sm float-md-right text-white">New Business</a>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        @foreach($businesses as $business)
            <div class="col-sm-6">
                <a href="{{route('dashboard.business.detail', compact('business'))}}">
                    <div class="card">
                        <div class="card-header"><h4 class="text-center">{{$business->name}}</h4></div>
                        <div class="card-footer">

                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
