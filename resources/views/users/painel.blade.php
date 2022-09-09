@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

@foreach($usuario as $teste)
     <p>{{ $teste->name}}</p>
@endforeach

@endsection