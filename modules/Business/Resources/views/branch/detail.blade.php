@extends('adminlte::page')
@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>{{$branch->name}}</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Overview</a></li>
                <li class="breadcrumb-item"><a href="{{route('dashboard.business.detail', compact('business'))}}">{{$business->name}}</a></li>
                <li class="breadcrumb-item active">{{$branch->name}}</li>
            </ol>
        </div>
        @endsection
        @section('content')
            <div class="row">
                <table>
                    <thead>
                    <th>Number</th>
                    <th>Status</th>
                    </thead>
                    <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{$room->number}}</td>
                            <td>{{$room->status}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
@endsection
