@extends('layouts.app')

@section('content')
    <h1>Repetidors</h1>
    <ul class = "list-group">
        @if(count($llista_repetidors) > 0)
            @foreach($llista_repetidors as $repetidor)
                <div class = "well">
                    <h5> <li class = "list-group-item"><a href = "repetidors_log/{{$repetidor->codi}}">Repetidor {{$repetidor->codi}} {{$repetidor->ciutat}} {{$repetidor->nom}}</a>
                    </li> </h5>
                </div>

            @endforeach
        @else
            <p>Actualment no hi ha repetidors</p>
        @endif
    </ul>
@endsection
