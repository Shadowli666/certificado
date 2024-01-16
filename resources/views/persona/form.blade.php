<h2>Datos del participante</h2>

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </ul>
</div>
@endif
<div class="row">
    <div class="col">
        <div class="mb-3">
            <label for="name" class="form-label">Primer Nombre:</label>
            <input type="text" name="fname" id="fname" class="form-control"
                @disabled($modo == 'Asignar')
                value="{{isset($persona->fname)?$persona->fname:old('fname')}}">
        </div>
    </div>
    <div class="col">
        <div class="mb-3">
            <label for="mname" class="form-label">Segundo Nombre:</label>
            <input type="text" name="mname" id="mname" class="form-control"
                @disabled($modo == 'Asignar')
                value="{{isset($persona->mname)?$persona->mname:old('mname')}}">
        </div>
    </div>
    <div class="col">
        <div class="mb-3">
            <label for="lname" class="form-label">Primer Apellido:</label>
            <input type="text" name="lname" id="lname" class="form-control"
            @disabled($modo == 'Asignar')
                value="{{isset($persona->lname)?$persona->lname:old('lname')}}">
        </div>
    </div>
    <div class="col">
        <div class="mb-3">
            <label for="slname" class="form-label">Segundo Apellido:</label>
            <input type="text" name="slname" id="slname" class="form-control"
            @disabled($modo == 'Asignar')
                value="{{isset($persona->slname)?$persona->slname:old('slname')}}">
        </div>
    </div>
<div class="row">
    <div class="col">
        <div class="mb-3">
            <label for="document" class="form-label">Cedula:</label>
            <input type="number" name="document" id="document" class="form-control"
            @disabled($modo == 'Asignar')
                value="{{isset($persona->document)?$persona->document:old('document')}}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        {{Form::select('certificado_id', $facultad, $certificado->certificado_id,['class'=>'form-select'])}}
    </div>
</div>
<div class="mt-5 text-center">
    <button type="submit" class="btn btn-success">{{$modo}} datos</button>
    <button type="reset" class="btn btn-secondary">Limpiar</button>
</div>
