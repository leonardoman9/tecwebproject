@extends('welcome')

@section('title', 'DettaglioAlloggio')
@section('content')

<h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Dettaglio alloggio
        </h1>


<div class="modif">
        <h1>Dettaglio Alloggio</h1>
    </div>
    <div class="dettaglio">
        <!-- Tipologia: {{$post->tipologia}}</h3>--><h3>
        <h3>Data Inserimento: {{$post->data_inserimento}}</h3>
        <h3>Canone: {{$post->canone}} €/Mese</h3>
        <h3>Dimenzione: {{$post->dimenzione}} Mq</h3>
        <h3>Citta: {{$post->citta}}</h3>
        <h3>Indirizzo: {{$post->indirizzo}}</h3>
        <h3>Data Inizio Locazione: {{$post->data_inizio_locazione}}</h3>
        <h3>Data Fine Locazione: {{$post->data_fine_locazione}}</h3>
        <h3>Numero Camere: {{$post->numero_camere}}</h3>
        <h3>Numero Posto Letto Totale: {{$post->numero_posto_letto_totale}}</h3>
        <h3>Numero Letti Nella Camera: {{$post->numero_letti_nella_camera}}</h3>
        <h3>Descrizione: {{$post->descrizione}}</h3>
        <h3>Etat: {{$post->etat}}</h3>
        
    </div>    
   



    @endsection