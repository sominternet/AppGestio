@extends('layouts.app')

@section('content')
    <h1>Editar Repetidor</h1>
    {!! Form::open(['action' => ['RepetidorsController@update', $repetidor->codi], 'method' => 'POST']) !!}
     <div class="form-group">
            {{Form::label('codi', 'codi')}}
            {{Form::text('codi', $repetidor->codi, ['class' => 'form-control', 'placeholder' => 'codi'])}}
        </div>
    <div class="form-group">
            {{Form::label('ciutat', 'ciutat')}}
            {{Form::text('ciutat', $repetidor->ciutat, ['class' => 'form-control', 'placeholder' => 'Ciutat'])}}
        </div>
        <div class="form-group">
            {{Form::label('adreça', 'adreça')}}
            {{Form::text('adreça', $repetidor->adreça, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'adreça'])}}
    </div>
    <div class="form-group">
            {{Form::label('lat', 'lat')}}
            {{Form::text('lat', $repetidor->lat, ['class' => 'form-control', 'placeholder' => 'lat'])}}
        </div>
        <div class="form-group">
            {{Form::label('long', 'long')}}
            {{Form::text('long', $repetidor->long, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'long'])}}
    </div>
    <div class="form-group">
            {{Form::label('ip_publica', 'ip_publica')}}
            {{Form::text('ip_publica', $repetidor->ip_publica, ['class' => 'form-control', 'placeholder' => 'ip_publica'])}}
        </div>
        <div class="form-group">
            {{Form::label('ip_privada_ppoe', 'ip_privada_ppoe')}}
            {{Form::text('ip_privada_ppoe', $repetidor->ip_privada_ppoe, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'ip_privada_ppoe'])}}
    </div>
    <div class="form-group">
            {{Form::label('nom_radius', 'nom_radius')}}
            {{Form::text('nom_radius', $repetidor->nom_radius, ['class' => 'form-control', 'placeholder' => 'nom_radius'])}}
        </div>
        <div class="form-group">
            {{Form::label('pwd_radius', 'pwd_radius')}}
            {{Form::text('pwd_radius', $repetidor->pwd_radius, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'pwd_radius'])}}
    </div>
    <div class="form-group">
            {{Form::label('nom', 'nom')}}
            {{Form::text('nom', $repetidor->nom, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'nom'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Editar  ', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
