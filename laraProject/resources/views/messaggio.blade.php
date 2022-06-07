@extends('welcome')

@section('title', 'Invia Messaggio')
@section('content')
 <h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Messaggi
        </h1>
<script src="../js/lengthRange.js" type="text/javascript"></script>
<script src="{{asset('../resources/js/lengthRange.js')}}"></script>

<div class='floatingForm'>
   {{ Form::open(array('route' => array('inviaMessaggio'),'class' => 'searchForm')) }}
        @csrf
        {!! Form::hidden('annId', $annId, ['class' => 'form-control', 'readonly' => 'true', 'hidden' => 'true']) !!}
        <h1>Alloggio: <a href="{{route('Ann', $annId)}}">{{$annId}}</a></h1> 
    <h1>Mittente:  </h1> 
    <h3> {!! Form::text('sender', Auth::user()->username, ['class' => 'form-control', 'readonly' => 'true']) !!}
                            </h3>
    <h1>Destinatario: </h1>
    <h3>{!! Form::text('receiver', $locUsername, ['class' => 'form-control', 'readonly' => 'true']) !!}</h3><!-- comment -->
<h1>Corpo del messaggio:</h1>
    {!! Form::textarea('mess', null, ['id' => 'mess', 'rows' => 5, 'cols' => 150, 'style' => 'resize:none']) !!}
    
    @can('isLocatario')
       @if($flag==0)
    {{Form::checkbox('opziona')}}
         {{Form::label('opziona', 'Invia richiesta di opzionamento per questo alloggio')}}
    
    @else
    <input type="hidden" name="opziona" value="false">
    Hai già inviato una richiesta di opzionamento per questo alloggio.
   @endif
    @endcan
    
    
     {{Form::submit('Invia', ['class'=>'login-btn', 'onclick' => 'return lengthRange(mess, 1, 255);'])}}
{{Form::close()}}
</div>
@endsection
