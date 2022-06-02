@extends('welcome')

<!-- Titolo da appendere alla rotta -->
@section('title', 'modifica faq')



<!-- Sezione centrale della pagina delle faq -->
@section('content')

<div id="Modify_Div">
    <section id="Modify">

  

        {{ Form::open(array(route('modifica_faq',[$faq->id]), 'method' => 'POST')) }}
        <h2>Modifica FAQ</h2>
        <div>
            {{ Form::label('domanda', 'domanda') }}
            {{ Form::text('domanda', $faq->domanda) }}
            @if ($errors->first('domanda'))
            <ul class="errors">
                @foreach ($errors->get('domanda') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div>
            {{ Form::label('risposta', 'risposta') }}
            {{ Form::text('risposta', $faq->risposta) }}
            @if ($errors->first('risposta'))
            <ul class="errors">
                @foreach ($errors->get('risposta') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        {{ Form::submit('Conferma', ['class' => 'submit']) }}
        {{ Form::close() }}
        
    </section>   
</div>

@endsection