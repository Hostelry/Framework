@extends('dashboard::layouts.master')

@section('content')
    <h1>Overview</h1>

    @foreach($businesses as $business)
        <div class="">
            {{$business->name}}
        </div>
    @endforeach
@endsection
