@extends('layouts.app')

@section('content')
    <h1>Routers del Repetidor</h1>
    <ul class = "list-group">
        @if(count($llista_repetidors_routers) > 0)
            @foreach($llista_repetidors_routers as $repetidor_router)
                <div class = "well">
                    <h5> <li class = "list-group-item"><a href = "/repetidors_log/{{$id}}/{{$repetidor_router->id_router}}">Router {{$repetidor_router->comentaris	}} {{$repetidor_router->ip}}</a>
                    </a>

                    </li> </h5>
                </div>

            @endforeach
        @else
            <p>Actualment no hi ha Routers assignats a aquest repetidor</p>
        @endif
    </ul>
@endsection
