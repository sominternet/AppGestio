@extends('layouts.app')

@section('content')
    <h1>Repetidors</h1>
    <ul class = "list-group">
        @if(count($llista_repetidors) > 0)
            @foreach($llista_repetidors as $repetidor)
                <div class = "well">
                    <h3> <li class = "list-group-item"><a href = "/repetidors/{{$repetidor->codi}}"> {{$repetidor->codi}}</a></li> </h3>
                </div>
            @endforeach
        @else
            <p>Actualment no hi ha repetidors</p>
        @endif
    </ul>
@endsection
