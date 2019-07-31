@extends('layouts.app')

@section('content')

    <h1>Pagina Repetidors</h1>
        <ul class = "list-group">
            @if(count($repetidors) > 0)
                @foreach($repetidors as $repetidor)
                    <h1>Repetidor</h1>
                    <li class = "list-group-item">{{$repetidor}}</li>
                @endforeach
            @endif
        </ul>
@endsection()
