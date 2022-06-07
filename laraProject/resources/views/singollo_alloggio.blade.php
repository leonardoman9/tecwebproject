@extends('welcome')

@section('title', 'Dettagli Alloggio')
@section('content')
<link href="{{asset('css/insertAll.css')}}" rel="stylesheet" type="text/css"/>

<h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Dettagli alloggio
        </h1>

<div class="floatingForm">
    <div class="buttonM">
        <a href="{{route('alloggiLocatore')}}"> <span >Miei Alloggi</span> </a>
    </div>

        
        <div class="dettaglio">
            @isset($post)
            
            <h3>Tipologia:</h3><h4> @switch($post->tipologia)
                            @case(1) Posto letto @break
                            @case(2) Appartamento @break
                            @endswitch </h4><br>
            <img src="../../storage/app/{{$foto->path}}" class='catfoto' onmouseover='bigImg(this)' onmouseout='normalImg(this)'>
            <h3>Data Inserimento:</h3> <h4>{{$post->data_inserimento}}</h4>
            <h3>Canone:</h3> <h4>{{$post->canone}} €/Mese</h4>
            <h3>Dimenzione:</h3> <h4>{{$post->dimensione}} Mq</h4>
            <h3>Citta:</h3> <h4>{{$post->citta}}</h4>
            <h3>Indirizzo:</h3> <h4> {{$post->indirizzo}}</h4>
            <h3>Data Inizio Locazione: </h3><h4>{{$post->data_inizio_locazione}}</h4>
            <h3>Data Fine Locazione:</h3><h4> {{$post->data_fine_locazione}}</h4>
            <h3>Numero Camere:</h3><h4> {{$post->numero_camere}}</h4>
            <h3>Numero Posto Letto Totale:</h3><h4> {{$post->numero_posto_letto_totale}}</h4>
            <h3>Numero Letti Nella Camera:</h3><h4> {{$post->numero_letti_nella_camera}}</h4>
            <h3>Descrizione: </h3><h4>{{$post->descrizione}}</h4>

            <div class="buttonF">
                <a href="{{route('modificaAlloggio', $post->id_alloggio)}}"  id="modificaButton" > <span> Modifica Allogio</span></a>
                <!-- -->  <a href="{{route('cancellaAlloggio', $post->id_alloggio)}}"  id="cancellaButton" onclick="return deleteElement();"><span>Cancelli Alloggio</span></a> 
            </div>

            @endisset
            
        </div>    
   

</div>

    @endsection