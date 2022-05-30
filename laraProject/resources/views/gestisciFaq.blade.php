@extends('welcome')

@section('title', 'Gestione FAQ')
@section('content')

<div>
    
    {{$faq->domanda}}
    {{$faq->risposta}}
    
    
</div>
{{ Form::open(array('route' => 'modifica_profilo')) }}

        {{ Form::label('Domanda', 'Domanda') }}
        {{ Form::text('Domanda', $faq->domanda) }}
        @if ($errors->first('Domanda'))
               <ul class="errors">
                   @foreach ($errors->get('Domanda') as $message)
                   <li>{{ $message }}</li>
                   @endforeach
               </ul>
        @endif
        {{ Form::label('Risposta', 'Risposta') }}
        {{ Form::text('Risposta', $faq->risposta) }}
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
