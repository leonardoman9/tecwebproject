@extends('welcome')

@section('title', 'Messaggi')
<link href="{{asset('css/messaggi.css')}}" rel="stylesheet" type="text/css"/>
@section('content')
 <div class="floatingForm" id="recentchats">
     @foreach($msgs as $msg)
     
     <div class={{$msg->mittente==Auth::user()->username ? 'sentMessage' : 'receivedMessage'}}>
          <a href="{{route('Ann', $msg->id_alloggio)}}">Visualizza annuncio relativo</a>
    <h5>{{$msg->timestamp}}<h5>
    <h4>Da: </h4><h5>{{$msg->mittente}} </h5>
    <h4>A: </h4><h5>{{$msg->destinatario}} </h5>
    <h4>Testo: </h4><h5>{{$msg->testo}}
    <a href="{{route('rispondi', $msg->id)}}">Rispondi</a>
    </div>
     @endforeach
 </div>
@endsection
