@extends('welcome')
@section('title', 'Catalogo')

    @section('content')
    @auth
          @include('layouts/_ricerca') 
    @endauth
   
    
    
    @isset($latestAnn)
          @foreach ($latestAnn as $ann)
          
                    <?php $stampa = false; ?>
                        <section class="banner">
                            
                            <div class="banner_image">
                                @guest
                                 <a href="{{route('login')}}" >
                        @include('helpers/annImg')</a>
                                 @endguest
                                 @auth
                                 <a href="{{route('Ann', $ann->id_alloggio)}}" >
                        @include('helpers/annImg')</a>
                                 @endauth
                            </div>
                            
                         <div class="banner_copy">
                             <div class="banner_copy_text">
                                 @switch($ann->tipologia)
                                 @case(1) <h3> <u>{{$ann->citta}} - POSTO LETTO in {{$ann->indirizzo}}</u></h3> @break
                                 @case(2) <h3> <u>{{$ann->citta}} - APPARTAMENTO in {{$ann->indirizzo}}</u></h3> @break
                                 @endswitch
                               <p>
                                   {{$ann->descrizione}}
                               </p>
                               <div class="prezzo">
                                    <h4> 1 locale | </h4>
                                    <h4> {{$ann->numero_posto_letto_totale}} posti letto | </h4>
                                    <h4> {{$ann->dimensione}}Mq | </h4>
                                    <h4> Prezzo: {{$ann->canone}}€/Mese </h4>
                                  @guest
                                 <a href="{{route('login')}}" class="button">Vedi l'annuncio</a>
                                 @endguest
                                 @auth
                                 <a href="{{route('Ann', $ann->id_alloggio)}}" class="button">Vedi l'annuncio</a>
                                 @endauth
                                </div>
                                </div>
                         </div>
                     </div>
                      </section>
          @endforeach
       <!--Paginazione-->
    @include('pagination.paginator', ['paginator' => $latestAnn])
    @endisset()
    
    @isset($results)
    
    @foreach ($results as $ann)
                    
          
                    <?php $stampa = false; ?>
                        <section class="banner">
                            
                            <div class="banner_image">
                                @guest
                                 <a href="{{route('login')}}" >
                        @include('helpers/annImg')</a>
                                 @endguest
                                 @auth
                                 <a href="{{route('Ann', $ann->id_alloggio)}}" >
                        @include('helpers/annImg')</a>
                                 @endauth
                            </div>
                            
                         <div class="banner_copy">
                             <div class="banner_copy_text">
                                 @switch($ann->tipologia)
                                 @case(1) <h3> <u>{{$ann->citta}} - POSTO LETTO in {{$ann->indirizzo}}</u></h3> @break
                                 @case(2) <h3> <u>{{$ann->citta}} - APPARTAMENTO in {{$ann->indirizzo}}</u></h3> @break
                                 @endswitch
                               <p>
                                   {{$ann->descrizione}}
                               </p>
                               <div class="prezzo">
                                    <h4> 1 locale | </h4>
                                    <h4> {{$ann->numero_posto_letto_totale}} posti letto | </h4>
                                    <h4> {{$ann->dimensione}}Mq | </h4>
                                    <h4> Prezzo: {{$ann->canone}}€/Mese </h4>
                                  @guest
                                 <a href="{{route('login')}}" class="button">Vedi l'annuncio</a>
                                 @endguest
                                 @auth
                                 <a href="{{route('Ann', $ann->id_alloggio)}}" class="button">Vedi l'annuncio</a>
                                 @endauth
                                </div>
                                </div>
                         </div>
                     </div>
                      </section>
          @endforeach
    
    @endisset
  
    @include('layouts/_cards')
    @endsection
    

     
    
