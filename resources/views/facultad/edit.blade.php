@extends('layouts.app')
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
@section('content')
    <div class="container-fluid min-vh-100">
        <div class="text-center">
            <h1>Edicion de Facultad</h1>
        </div>
        <div class="form-container container my-5">
        <form action="{{url('/facultad/'.$facultad->id)}}" method="post" class="form-container container my-5">
                @csrf
                {{method_field('PATCH')}}
                @include('facultad.form',['modo'=>'Editar'])
            </form>
        </div>
    </div>
@endsection
