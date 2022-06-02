@extends('welcome')
@section('title', 'Registrazione')

@section('content')
<div id="Signup_Div">
    <section id="Signup">
        {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}
        @csrf
        <h2>Registrati</h2>
        {{ Form::label('username', 'username') }}
        {{ Form::text('username') }}
        @if ($errors->first('username'))
        <ul class="errors">
            @foreach ($errors->get('username') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif


        {{ Form::label('nome', 'nome') }}
        {{ Form::text('nome', '') }}
        @if ($errors->first('nome'))
        <ul class="errors">
            @foreach ($errors->get('nome') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif



        {{ Form::label('password', 'password') }}
        {{ Form::password('password') }}
        @if ($errors->first('password'))
        <ul class="errors">
            @foreach ($errors->get('password') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        {{ Form::submit('Registrati', ['class' => 'submit'])}}
        
        
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
        {{ Form::close() }}
        <a href="{{ route('login') }}">Hai già un account? Accedi!</a>
    </section>
</div>
@endsection
