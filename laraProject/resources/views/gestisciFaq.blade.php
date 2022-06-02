@extends('welcome')

@section('title', 'Gestione FAQ')
@section('content')

<div>
    
    
</div>
{{ Form::open(array('route' => 'modifica_profilo')) }}

        {{ Form::label('Domanda', 'Domanda') }}
        {{ Form::text('Domanda', 'Domanda') }}
        @if ($errors->first('Domanda'))
               <ul class="errors">
                   @foreach ($errors->get('Domanda') as $message)
                   <li>{{ $message }}</li>
                   @endforeach
               </ul>
        @endif
        {{ Form::label('Risposta', 'Risposta') }}
        {{ Form::text('Risposta', 'Risposta') }}
        @if ($errors->first('Risposta'))
        <ul class="errors">
            @foreach ($errors->get('Risposta') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        {{ Form::submit('Conferma', ['class' => 'submit']) }}
        {{ Form::close() }}
@endsection
