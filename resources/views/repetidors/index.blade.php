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
                    <a>
                    {!!Form::open(['action' => ['RepetidorsController@destroy', $repetidor->codi], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Borrar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                    </a>

                    </li> </h5>
                </div>

            @endforeach
        @else
            <p>Actualment no hi ha repetidors</p>
        @endif
    </ul>
@endsection
