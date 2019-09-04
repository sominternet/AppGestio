

@extends('layouts.app')

@section('content')
    <h1>Alertes <a class = "btn btn-primary" href = "/alertes/destroy_all" role = "button">Limpiar totes les alertes</a> </h1>

    <ul class = "list-group">
        @if(count($llistat) > 0)
            @foreach($llistat as $repetidor)
                <div class = "well">
                    <h5> <li class = "list-group-item"><a href = "/alertes/{{$repetidor["repetidor"]->codi}}"> Repetidor {{$repetidor["repetidor"]->nom}} {{$repetidor["repetidor"]->codi}}</a>
                    @if($repetidor["teincidencia"] == "si")
                        TE INCIDENCIA
                    @endif
                    <a class = "btn btn-primary btn-right" href = "/alertes/destroy_repetidor/{{$repetidor['repetidor']->codi}}" role = "button"  style="float: right;">Limpiar incidencies repetidor</a>

                    </li> </h5>
                </div>
            @endforeach
        @else
            <p>Actualment no hi ha alertes</p>
        @endif
    </ul>
@endsection
