@extends('welcome')

@section('title', 'Richieste di locazione')
@section('content')
<link href="{{asset('css/insertAll.css')}}" rel="stylesheet" type="text/css"/>

<script src="{{asset('../resources/js/confirmDelete.js')}}"></script>

<h1 id="title">Alloggio
        </h1>
<div class="floatingForm">
    
    @if($richiesteAlloggio->isEmpty())
    <h1>Non ci sono ancora richieste di opzionamento per questo alloggio.</h1>
    @else
    
    @foreach($richiesteAlloggio as $ric)
    <div class="floatingForm">
        @if($ric->accettata==1)
        <h2>Alloggio già assegnato a: </h2>
            <h1>Username locatario: </h1> {{$ric->username}}
            <h1>Nome locatario: </h1> {{$ric->nome}} {{$ric->cognome}}
            <h1>Genere: </h1> {{$ric->genere}}
            <h1>Età: </h1> {{$ric->eta}}
            <h1>Data richiesta di locazione: </h1> {{$ric->data}}
            <h1>Date di locazione: </h1> dal {{$ric->data_inizio_locazione}} al {{$ric->data_fine_locazione}}
            <h1>Data di assegnazione: </h1> {{$ric->data_assegnazione}}
        
        @else
        
        <h1>Username locatario: </h1> {{$ric->username}}
        <h1>Nome locatario: </h1> {{$ric->nome}} {{$ric->cognome}}
        <h1>Genere: </h1> {{$ric->genere}}
        <h1>Età: </h1> {{$ric->eta}}
        <h1>Data richiesta di locazione: </h1> {{$ric->data}}
        <h1>Date di locazione: </h1> dal {{$ric->data_inizio_locazione}} al {{$ric->data_fine_locazione}}
        <a href="{{route('AccettaRichiesta', ['opzId' => $ric->id, 
                                              'id_alloggio' => $ric->id_alloggio,  
                                              'id_opzionante' => $ric->id_opzionante
                                             ])
                  }}"> 
            <input type="button" class="btn-accedi" id="accetta" value="Accetta richiesta"  />
        </a>
                    </div>
        @endif
    @endforeach
    @endif
    </div>
</div>

@endsection