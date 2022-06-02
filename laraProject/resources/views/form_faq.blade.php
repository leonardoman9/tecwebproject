@extends('welcome')

<!-- Titolo da appendere alla rotta -->
@section('title', 'Form per le FAQ')



<!-- Sezione centrale della pagina delle faq -->
@section('content')

<div id="Modify_Div">
    <section id="Modify">

  
        
        {{ Form::open(array('route' => 'crea_faq', 'method' => 'POST', 'id' => 'creaFaq')) }}
        @csrf
        <h2>Crea FAQ</h2>
        <div>
            {{ Form::label('domanda', 'Domanda') }}
            {{ Form::text('domanda', '', ['class' => 'input', 'id' => 'domanda']) }}
        </div>
        <div>
            {{ Form::label('risposta', 'Risposta') }}
            {{ Form::text('risposta', '', ['class' => 'input', 'id' => 'risposta']) }}
        </div>
        {{ Form::submit('Conferma', ['class' => 'submit']) }}
        {{ Form::close() }}
        
    </section>   
</div>

@endsection