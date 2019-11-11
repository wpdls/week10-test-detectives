@extends('layouts/layout')

@section('content')

    <h1>The detectives list</h1>

        @foreach($detectives as $detective)

        <p>{{$detective->name}}</p>

        @endforeach

@endsection 