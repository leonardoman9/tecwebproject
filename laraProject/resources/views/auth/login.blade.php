

@extends('welcome')
@section('title', 'Login')

@section('content')
<link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css"/>

<div class="register">

        <h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    
                    margin-bottom: 30px;">Accedi
        </h1>

    <div class="floatingForm">
    
            <section section id="Signup1" class="singup_1">
                {{ Form::open(array('route' => 'login', 'class' => 'Form')) }}
                {{ Form::label('username', 'username') }}
                {{ Form::text('username') }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="pass">
                    {{ Form::label('password', 'password') }}
                    {{ Form::password('password') }}
                    
                    
                    @if ($errors->first('password'))
                    <ul>
                        @foreach ($errors->get('password') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="acc">
                        {{ Form::submit('Accedi', ['class' => 'submit'])}}
                        {{ Form::close() }}
                    
                </div>
                <a href="{{ route('register') }}">Non hai un account? Registrati!</a>
            </section>
        
    </div>
</div>
    @endsection
