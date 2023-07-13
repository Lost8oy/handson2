@extends('layout')
@section('content')
@if(count($computers) == 0)
    <p>No Computers Fount</p>
@endif

@foreach($computers as $computer)
    <h2> <a href="/computers/{{$computer['id']}}">{{$computer['model']}}</a> </h2>
    <p> {{$computer ['submodel']}}</p>
    <p> {{$computer ['inventory_number']}}</p>
    <p> {{$computer['manufacturer']}}</p>
    <p> {{$computer ['processor']}}</p>
    <p> {{$computer['power']}}</p>
    <p> {{ $computer ['speed']}}</p>
    <p> {{ $computer['country']}}</p>
    <p> {{ $computer ['date']}}</p>
    <p> {{ $computer['bit']}}</p>
    <p> {{ $computer ['description']}}</p>
@endforeach
@endsection