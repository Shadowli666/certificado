@extends('layouts.app')
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
@section('content')
    <div class="container-fluid min-vh-100">
        <div class="text-center">
            <h1>Crear participante</h1>
        </div>
        <div class="form-container container my-5">
            <form method="POST" action="{{url('/persona')}}">
                @csrf
                @include('persona.form',['modo'=>'Almacenar'])
            </form>
        </div>
    </div>
@endsection
