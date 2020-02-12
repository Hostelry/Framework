@extends('adminlte::page')

@section('content_header')
    <h1>Overview</h1>
@endsection
@section('content')
    @foreach($businesses as $business)
        <div class="">
            {{$business->name}}
        </div>
    @endforeach
@endsection
