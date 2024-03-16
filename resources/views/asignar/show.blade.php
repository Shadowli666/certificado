@extends('layouts.app')
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
@section('content')
<div class="container-fluid min-vh-100">
  <div class="text-center">
    <h1>Lista de Certificados</h1>
  </div>
  <div class="container my-5">
    <div>
      <strong>Participante:</strong> {{$listaCertificados[0]->person->fname ." ". $listaCertificados[0]->person->mname." ". $listaCertificados[0]->person->lname." ". $listaCertificados[0]->person->slname}}
    </div>
    <div class="accordion" id="accordionExample">
      @foreach ($listaCertificados as $clave => $elementoCertificado)
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$clave}}" aria-expanded="true" aria-controls="collapseOne">
            {{$elementoCertificado->certificate->title}}
          </button>
        </h2>
        <div id="collapse{{$clave}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p><strong>Certificado: </strong>{{$elementoCertificado->certificate->title}}</p>
            <p><strong>Cantidad de Horas: </strong>{{$elementoCertificado->certificate->hours}}</p>
            <p><strong>Identificador: </strong>{{$elementoCertificado->id}}</p>
            <p><strong>Fecha de Obtención: </strong>{{$elementoCertificado->created_at}}</p>
            <p><a class="btn btn-primary" href="{{url('./pdf/'.$elementoCertificado->id)}}" role="button">Imprimir Certificado</a></p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
