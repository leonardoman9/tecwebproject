@extends('welcome')
@section('title', 'Homepage')
    @section('content')
          @include('layouts/_ultimiAnnunci')
    @isset($latestAnn)
          @foreach($latestAnn as $ann)
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
                                 @case(0) <h3> <u> {{$ann->citta}} -  POSTO LETTO in {{$ann->indirizzo}}</u></h3> @break
                                 @case(1) <h3> <u>{{$ann->citta}}-  APPARTAMENTO in {{$ann->indirizzo}}</u></h3> @break
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
<<<<<<< HEAD
                                  <li><a href="{{route('RegolamentoPage')}}">mandare un messagio per una casa</a></li>
=======
                                 @endguest
                                 @auth
                                 <a href="{{route('Ann', $ann->id_alloggio)}}" class="button">Vedi l'annuncio</a>
                                 @endauth
>>>>>>> 9368113e3bdc05133882de7b4ef7cee225bdd206
                                </div>
                         </div>
                     </div>
                      </section>
          @endforeach
   
    @endisset()

          @include('layouts/_cards')
    @endsection
    
