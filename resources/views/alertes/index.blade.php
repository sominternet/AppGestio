@extends('layouts.app')

@section('content')
    <h1>Alertes</h1>
    <ul class = "list-group">
        @if(count($llistat) > 0)
            @foreach($llistat as $repetidor)
                <div class = "well">
                    <h5> <li class = "list-group-item"><a href = "/alertes/{{$repetidor["repetidor"]->codi}}"> Repetidor {{$repetidor["repetidor"]->nom}} {{$repetidor["repetidor"]->codi}}</a>
                    @if($repetidor["teincidencia"] == "si")
                        TE INCIDENCIA
                    @endif
                    </li> </h5>
                </div>
            @endforeach
        @else
            <p>Actualment no hi ha alertes</p>
        @endif
    </ul>
@endsection
