@extends('welcome')

@section('title', 'Messaggi')
<link href="{{asset('css/messaggi.css')}}" rel="stylesheet" type="text/css"/>
@section('content')
 <h1 id="top">Messaggi </h1>
 
 @isset($destinatari)
 <h1>Le mie chat</h1>
 @foreach($destinatari as $dest)
 <a href="{{route('msgConDest', $dest->destinatario)}}"> {{$dest->destinatario}}</a
 <br>
 @endforeach
 @endisset
 
<div class='floatingForm'>


 <div class="row">
     <div class="column">@isset($receivedMessages)
<h1>Messaggi ricevuti</h1>
<div class='receivedMessages'>
@foreach($receivedMessages as $msg)
<div class='receivedMessage' id='sent'>
    <a href="{{route('Ann', $msg->id_alloggio)}}"><h3>Vedi annuncio</h3></a>
    <h5>{{$msg->timestamp}}<h5>
    <h4>Da: </h4><h5>{{$msg->mittente}} </h5>
    <h4>A: </h4><h5>{{$msg->destinatario}} </h5>
    <h4>Testo: </h4><h5>{{$msg->testo}} 
        <a href="{{route('rispondi', $msg->id)}}">Rispondi</a>
        @csrf
</div>
@endforeach
</div>

@endisset</div>
  <div class="column">@isset($sentMessages)
<h1>Messaggi inviati</h1>
<div class='sentMessages'>
@foreach($sentMessages as $msg)
<div class='sentMessage' id='received'>
    <a href="{{route('Ann', $msg->id_alloggio)}}"><h3>Vedi annuncio</h3></a>
    <h5>{{$msg->timestamp}}<h5>
    <h4>Da: </h4><h5>{{$msg->mittente}} </h5>
    <h4>A: </h4><h5>{{$msg->destinatario}} </h5>
    <h4>Testo: </h4><h5>{{$msg->testo}} 
        
    <a href="{{route('rispondi', $msg->id)}}">Rispondi</a>
</div>
@endforeach
</div>
@endisset</div>
  
</div>
 


</div>
@endsection
