@extends('welcome')

@section('title', 'Opzionamenti')
@section('content')
 <h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Opzionamenti
        </h1>
<link href="{{asset('css/opzionamenti.css')}}" rel="stylesheet" type="text/css"/>
<script src="../js/lengthRange.js" type="text/javascript"></script>
<script src="{{asset('../resources/js/lengthRange.js')}}"></script>
<script src="{{asset('../resources/js/confirmDelete.js')}}"></script>
<div class='floatingForm'>
    @isset($opzionamenti)
    
        @foreach($opzionamenti as $opz)
        <div class='opzione'>
            <h1>Alloggio richiesto: <a href="{{route('Ann', $opz->id_alloggio)}}">Link</a> </h1>
            <h1>in data: {{$opz->data}} </h1>
            <h1>Stato della richiesta: @if($opz->accettata==1) <b>Assegnata!</b> @else In pending... @endif </h1>
            <h1> <a href="{{route('messaggio', $opz->id_alloggio)}}">Vai alla chat con il locatore </a></h1>
            
            <a href="{{route('cancellaOpzionamento', $opz->id)}}" class="" style="margin-top: 10px;" onclick="return deleteElement();"> Cancella richiesta di opzionamento </a>
          
        </div>
        @endforeach
    
    @endisset
    
</div>


@endsection
