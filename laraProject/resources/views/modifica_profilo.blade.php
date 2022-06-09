@extends('welcome')

<!-- Titolo da appendere alla rotta -->
@section('title', 'Modifica del profilo')
 <script src="../../resources/js/showpassword.js" type="text/javascript"></script>
<script src="{{ asset('js/modifica_profilo.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/profilo.css') }}" >
@section('specific')
<!-- Stili relativi al signup -->
@endsection
<!-- Sezione centrale della pagina di modifica del profilo -->
@section('content')

<h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    
                    margin-bottom: 30px;">Modifica il tuo profilo
        </h1>

<div class="floatingForm">

        <section id="Signup1" class="singup_1">
            
            {{ Form::open(array('route' => 'modifica_profilo')) }}
            <h5>Lasciare il campo vuoto nel caso in cui non lo si voglia modificare</h5>

            {{ Form::label('username', 'Username') }}
            {{ Form::text('username', $utente->username, ['disabled']) }}

            {{ Form::label('nome', 'Nome') }}
            {{ Form::text('nome', $utente->nome) }}
            @if ($errors->first('nome'))
            <ul class="errors">
                @foreach ($errors->get('nome') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif
            {{ Form::label('cognome', 'Cognome') }}
            {{ Form::text('cognome', $utente->cognome) }}
            @if ($errors->first('cognome'))
            <ul class="errors">
                @foreach ($errors->get('cognome') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif
            
            <div class="eta">
                {{ Form::label('eta', 'Età') }}
                {{Form::number('eta', $utente->eta)}}
                @if ($errors->first('eta'))
                <ul class="errors">
                    @foreach ($errors->get('eta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
               <div>
                   <br>
                {{ Form::label('genere', 'Genere') }}
                
                {{Form::select('genere', array('maschio' => 'Maschio', 'Femmina' => 'Femmina'))}}
                @if ($errors->first('genere'))
                <ul class="errors">
                    @foreach ($errors->get('genere') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif 
                </div>
            </div>

            <div class="pass">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', ['placeholder' => 'Nuova password', 'id' => 'password']) }}
                <input type="checkbox" onclick="showPassword()" class="checkbox"><label style="font-size: 16px;">Mostra la password</label></input>
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="con">
                {{ Form::submit('Conferma', ['class' => 'submit']) }}
                {{ Form::close() }}
            </div>
            
        </section>   
</div>   
@endsection