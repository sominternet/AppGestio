@extends('layouts.app')

@section('content')
    <h1>Registres del router</h1>
    <ul class = "list-group">
        @if(count($result) > 0)
            @foreach($keys as $key)
                <div class = "well">
                    <h4> <li class = "list-group-item">({{$key}})
                    @foreach($result[$key] as $variable)
                        <h5> {{$variable->elem1}} : {{$variable->elem2}}</h5>
                    @endforeach
                    </li> </h4>
                </div>

            @endforeach
        @else
            <p>Actualment no hi ha Routers assignats a aquest repetidor</p>
        @endif
    </ul>
@endsection
