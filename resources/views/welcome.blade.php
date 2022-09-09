@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

<main class="form-signin w-100 m-auto">
         
          <h1 class="h3 mb-3 fw-normal">Bem-vindo</h1>
        <a style="text-decoration: none; color: black" href="http://127.0.0.1:8000/login">Login</a>
        | 
        <a style="text-decoration: none; color: black" href="http://127.0.0.1:8000/register">Cadastrar</a>
</main>

@endsection