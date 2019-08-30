@extends('layouts.app')

@section('content')
    <h1>Alertes</h1>
    <ul class = "list-group">
        @if(count($llista_repetidors) > 0)
            @foreach($llista_repetidors as $repetidor)
                <div class = "well">

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
            <p>Actualment no hi ha alertes</p>
        @endif
    </ul>
@endsection
