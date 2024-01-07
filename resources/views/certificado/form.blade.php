<h2>Datos del Certificado</h2>
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
            <label for="title" class="form-label">Nombre:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Inserte el nombre del certificado aquí"
            value="{{isset($certificado->title)?$certificado->title:old('title')}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div>
            <label for="faculty_id" class="form-label">Facultad:</label>
            {{Form::select('faculty_id', $facultad, $certificado->certificado_id,['class'=>'form-select'])}}
        </div>
    </div>
        <div class="col">
            <label for="hours" class="form-label">Horas:</label>
            <input type="number" name="hours" id="hours" class="form-control" min="40" value="40"
            value="{{isset($certificado->hours)?$certificado->hours:old('hours')}}">
        </div>
</div>

<div class="mt-5 text-center">
    <button type="submit" class="btn btn-success">{{$modo}} datos</button>
    <button type="reset" class="btn btn-secondary">Limpiar</button>
</div>


