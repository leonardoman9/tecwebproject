
@extends('welcome')
@section('title', 'Registrazione')

@section('content')



<link href="{{asset('css/signup.css')}}" rel="stylesheet" type="text/css"/>
<div class="register">
<h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    
                    margin-bottom: 30px;">Registrati
        </h1>
<div class="floatingForm">
    
        <section id="Signup1" class="singup_1">
            
            {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}
            @csrf
            
            
            {{ Form::label('username','username' ) }}
            {{ Form::text('username') }}
            @if ($errors->first('username'))
            <ul class="errors">
                @foreach ($errors->get('username') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif


            {{ Form::label('nome', 'Nome') }}
            {{ Form::text('nome', '') }}
            @if ($errors->first('nome'))
            <ul class="errors">
                @foreach ($errors->get('nome') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif
            {{ Form::label('cognome', 'Cognome') }}
            {{ Form::text('cognome', '') }}
            @if ($errors->first('cognome'))
            <ul class="errors">
                @foreach ($errors->get('cognome') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            <div class="eta">
                {{ Form::label('eta', 'età') }}
                {{ Form::number('eta') }}
                @if ($errors->first('eta'))
                <ul class="errors">
                    @foreach ($errors->get('eta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                {{ Form::label('genere', 'Genere') }}
                    {{ Form::select('genere', array('maschio'=> 'Maschio', 'femmina' => 'Femmina')) }}
                    @if ($errors->first('genere'))
                    <ul class="errors">
                        @foreach ($errors->get('genere') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                   
             </div>

            <div class="pass">
                {{ Form::label('password', 'password') }}
                {{ Form::password('password') }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="button">{{ Form::submit('Registrati', ['class' => 'submit'])}}</div>

            <div class="loc">
                {{ Form::label('role', 'Locatore') }}
                {{ Form::radio('role', 'locatore') }}
                @if ($errors->first('role'))
                <ul class="errors">
                    @foreach ($errors->get('role') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                {{ Form::label('role', 'Locatario') }}
                {{ Form::radio('role', 'locatario') }}
                @if ($errors->first('role'))
                <ul class="errors">
                    @foreach ($errors->get('role') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>           
           
            {{ Form::close() }}
            <a href="{{ route('login') }}">Hai già un account? Accedi!</a>
            
        </section>
    <!-- </div><div id="Signup"> <div class="button"></div>-->
</div>

@endsection
</div>