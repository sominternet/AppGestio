@extends('layouts.app')

@section('content')

    <h1>Repetidors</h1>
        <ul class = "list-group">
            @if(count($repetidors) > 0)
                @foreach($repetidors as $repetidor)
                    <li class = "list-group-item">{{$repetidor}}</li>
                @endforeach
            @endif
        </ul>
@endsection()
