@extends('welcome')

<!-- Titolo da appendere alla rotta -->
@section('title', 'Modifica del profilo')
 <script src="../../resources/js/showpassword.js" type="text/javascript"></script>

    
@section('specific')
<!-- Stili relativi al signup -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/modifica_profilo.css') }}" >
<script src="{{ asset('js/modifica_profilo.js') }}"></script>
@endsection
<!-- Sezione centrale della pagina di modifica del profilo -->
@section('content')
<div id="Modify_Div" >
    <section id="Modify">
        @can('isLocatario')
        {{ Form::open(array('route' => 'modifica_profilo')) }}
        <h2>Modifica del profilo</h2>
        @endcan


        <h4>Lasciare il campo vuoto nel caso in cui non lo si voglia modificare</h4>

        {{ Form::label('username', 'username') }}
        {{ Form::text('username', $utente->username, ['disabled']) }}

        {{ Form::label('nome', 'nome') }}
        {{ Form::text('nome', $utente->nome) }}
        @if ($errors->first('nome'))
        <ul class="errors">
            @foreach ($errors->get('nome') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        {{ Form::label('cognome', 'cognome') }}
        {{ Form::text('cognome', $utente->cognome) }}
        @if ($errors->first('cognome'))
        <ul class="errors">
            @foreach ($errors->get('cognome') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
        {{ Form::label('genere', 'genere') }}
        {{ Form::text('genere', $utente->genere) }}
        @if ($errors->first('genere'))
        <ul class="errors">
            @foreach ($errors->get('genere') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::label('password', 'password') }}
        {{ Form::password('password', ['placeholder' => 'Nuova password', 'id' => 'password']) }}
        <input type="checkbox" onclick="showPassword()" class="checkbox"><label style="font-size: 16px;">Mostra la password</label></input>
        @if ($errors->first('password'))
        <ul class="errors">
            @foreach ($errors->get('password') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::submit('Conferma', ['class' => 'submit']) }}
        {{ Form::close() }}
    </section>   
</div>
@endsection