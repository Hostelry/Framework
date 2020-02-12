@extends('adminlte::page')
@push('css')
    <style>
        a:link, a:visited {
            text-decoration: none;
            color: black;
            cursor: pointer;
        }
    </style>
@endpush
@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>{{$business->name}}</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Overview</a></li>
                <li class="breadcrumb-item active">{{$business->name}}</li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
            <a class="btn btn-primary  float-sm-right text-white" type="button">New Branch</a>
        </div>
    </div>
    <div class="clearfix"><br></div>
    <div class="row">
        @foreach($branches as $branch)
            <div class="col-sm-6">
                <a href="{{route('dashboard.branch.detail', compact('branch', 'business'))}}">
                    <div class="card">
                        <div class="card-header"><h4 class="text-center">{{$branch->name}}</h4></div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-xs col-sm-3 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{$branch->rooms()->status('available')->count()}}</h5>
                                        <span class="description-text text-green text-sm">AVAILABLE</span>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-3 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{$branch->rooms()->status('occupied')->count()}}</h5>
                                        <span class="description-text text-warning text-sm">OCCUPIED</span>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-3  border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{$branch->rooms()->status('cleaning')->count()}}</h5>
                                        <span class="description-text text-primary text-sm">CLEANING</span>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-3 ">
                                    <div class="description-block">
                                        <h5 class="description-header">{{$branch->rooms()->status('maintenance')->count()}}</h5>
                                        <span class="description-text text-danger text-sm">MAINTENANCE</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
