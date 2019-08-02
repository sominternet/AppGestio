@extends('layouts.app')

@section('content')
    <h1>Repetidors</h1>
    <p><a class = "btn btn-primary" href = "/repetidors/create" role = "button">Insert Repetidor</a></p>
    <ul class = "list-group">
        @if(count($llista_repetidors) > 0)
            @foreach($llista_repetidors as $repetidor)
                <div class = "well">
                    <h5> <li class = "list-group-item"><a href = "/repetidors/{{$repetidor->codi}}">Repetidor {{$repetidor->codi}} {{$repetidor->ciutat}} {{$repetidor->nom}}</a>
                    <a class = "btn btn-primary btn-right" href = "/repetidors/{{$repetidor->codi}}/edit" role = "button"  style="float: right;">Editar</a>
                    <a class = "btn btn-primary btn-right" href = "/repetidors/{{$repetidor->codi}}/destroy" role = "button"  style="float: right;">Borrar</a>
                    </li> </h5>
                </div>

            @endforeach
        @else
            <p>Actualment no hi ha repetidors</p>
        @endif
    </ul>
@endsection
