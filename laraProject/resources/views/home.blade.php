@extends('welcome')
@section('title', 'Homepage')
    @section('content')
          @include('layouts/_ultimiAnnunci')
             
    @isset($latestAnn)
 
          @foreach ($latestAnn as $ann)
                        <section class="banner ">
                     <div class="banner_image"></div>
                         <div class="banner_copy">
                             <div class="banner_copy_text">
                                 @switch($ann->tipologia)
                                 @case(0) <h3> POSTO LETTO </h3> @break
                                 @case(1) <h3> APPARTAMENTO </h3> @break
                                 @endswitch
                               <p>
                                   {{$ann->descrizione}}
                               </p>
                               <div class="prezzo">
                                    <h4>1 locale</h4>
                                    <h4> {{$ann->numero_posto_letto_totale}} posti letto </h4>
                                    <h4> {{$ann->dimensione}}m° </h4>
                                    <h4>Prezzo: {{$ann->canone}}€/Mese </h4>

                                 <a href="{{route('LoginPage')}}" class="button">Vedi l'annuncio</a>
                               </div>

                               <h5></h5>
                         </div>
                     </div>
                      </section>
          @endforeach
   
    @endisset()

          @include('layouts/_cards')
    @endsection
    

     
    
