@extends('welcome')
@section('title', 'Catalogo')

    @section('content')
          @include('layouts/_ricerca')
    @isset($latestAnn)
          @foreach ($latestAnn as $ann)
                    <?php $stampa = false; ?>
                        <section class="banner">
                            
                            <div class="banner_image">
                                <a href="{{route('login')}}">
                        @include('helpers/annImg')
                                </a>
                            </div>
                            
                         <div class="banner_copy">
                             <div class="banner_copy_text">
                                 @switch($ann->tipologia)
                                 @case(0) <h3> <u>{{$ann->citta}} - POSTO LETTO in {{$ann->indirizzo}}</u></h3> @break
                                 @case(1) <h3> <u>{{$ann->citta}} - APPARTAMENTO in {{$ann->indirizzo}}</u></h3> @break
                                 @endswitch
                               <p>
                                   {{$ann->descrizione}}
                               </p>
                               <div class="prezzo">
                                    <h4> 1 locale | </h4>
                                    <h4> {{$ann->numero_posto_letto_totale}} posti letto | </h4>
                                    <h4> {{$ann->dimensione}}Mq | </h4>
                                    <h4> Prezzo: {{$ann->canone}}€/Mese </h4>

                                 <a href="{{route('login')}}" class="button">Vedi l'annuncio</a>
                                </div>
                         </div>
                     </div>
<div class="message">
  {{form::label("name")}}
  <br>
  {{form: textarea('description',$messaggi)}}
  <div>
  {{form::sumit('envoyer')}}
  {{form::close()}}



                      </section>
          @endforeach
   
    @endisset()

          @include('layouts/_cards')
    @endsection
    

     
    
