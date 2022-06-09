@extends('welcome')

<!-- Titolo da appendere alla rotta -->
@section('title', 'Profilo')


<link rel="stylesheet" type="text/css" href="{{ asset('css/profilo.css') }}" >

@isset($auth)
@section('content')
<div id='profilo' style="text-align: center">
    <div class="Title">
        <h1><i class="fa fa-user"></i>&nbsp;Profilo</h1>
    </div>
    <ul>
        <li><h2>Username: </h2> {{$auth->username}}</li>
        <li><h2>Nome: </h2> {{$auth->nome}}</li>
        <li><h2>Cognome: </h2> {{$auth->cognome}}</li>
        <li><h2>Genere: </h2> {{$auth->genere}}</li>
        <li><h2>Età: </h2> {{$auth->eta}}</li>
        <li><h2>Ruolo: </h2> {{$auth->role}}</li>
        <li><h2>Data creazione account: </h2> <?php if($auth->created_at == null) { 
            echo("Account creato tramite db seeding.");
            } else {echo $auth->created_at; }?> </li>
        
         @if($auth->updated_at!=$auth->created_at) 
         <li><h2>Ultima modifica account: </h2>  {{$auth->updated_at}} </li>
         @endif
    </ul>
    
    <div id="Mod_Container">
        <a href="{{route('mostra_modifica_profilo')}}">
           <button class="button">Modifica profilo</button>
        </a>
    </div>

</div> <!-- <button id='bottonemodifica' class='btn-accedi'><i class="fa fa-pencil" aria-hidden="true"></i> Modifica profilo </button> -->

@endsection
@endisset