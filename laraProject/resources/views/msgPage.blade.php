@extends('welcome')

@section('title', ' MANDARE UN MessaggiO PER UN ALLOGGIO')
@section('content')
 <h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 100px;">Messaggio

                           :
        </h1>
<center>
<form action="/messages" method="post">
    {{ csrf_field() }}

    <div class="field">
        <label class="label">Messagio</label>
        <div class="control"> <br>
        	nome utente :<input type="text" size="5" placeholder=" nome utente con cui sei registrato" name="n0me utente">
            <textarea class="textarea"  name="message" rows="10" cols="80"  placeholder=" scrivere il messaggio cui"></textarea>
        </div>
        @if($errors->has('message'))
            <p class="help is-danger">{{ $errors->first('message') }}</p>
        @endif
    </div>  

    <div class="field">
        <div class="control">
            <button class="button is-link" size=10 type="submit">inviare</button>
        </div>
    </div>
</form>
</center>




@endsection
