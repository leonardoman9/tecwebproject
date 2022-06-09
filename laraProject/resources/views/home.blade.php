@extends('welcome')
@section('title', 'Homepage')

    @section('content')
          @include('layouts/_ultimiAnnunci')
    @isset($latestAnn)
          @foreach($latestAnn as $ann)
                        <section class="bannerr">
                            <div 
                                    class="banner_image">
                                        @guest
                                        <a href="{{route('login')}}" >
                                @include('helpers/annImg')</a>
                                        @endguest
                                        @auth
                                        <a href="{{route('Ann', $ann->id_alloggio)}}" >
                                @include('helpers/annImg')</a>
                                        @endauth
                            </div>  

                                    

                                <div class="banner_copy_text">
                                    @switch($ann->tipologia)
                                    @case(1) <h3> <u> {{$ann->citta}} -  POSTO LETTO in {{$ann->indirizzo}}</u></h3> @break
                                    @case(2) <h3> <u>{{$ann->citta}} -  APPARTAMENTO in {{$ann->indirizzo}}</u></h3> @break
                                    @endswitch

                                    <p>
                                        {{$ann->descrizione}}
                                    </p>
                               
                                    <div class="prezzo">
                                   <ul>
                               
                                       @switch($ann->tipologia)
                                         @case(2) <li><h4>Numero camere: <u>{{$ann->numero_camere}} </u></h4> </li>
                                                   <li><h4>Numero posti letto in totale: <u>{{$ann->numero_posto_letto_totale}} </u></h4></li> @break
                                         @case(1)  <li><h4>Numero posti letto in totale: <u>{{$ann->numero_posto_letto_totale}} </u></h4> </li>
                                                    <li><h4>Numero letti nella camera: <u>{{$ann->numero_letti_nella_camera}} </u></h4> </li>  @break
                                        @endswitch
                                       <li><h4> Dimensione:  {{$ann->dimensione}} Mq</h4></li>
                                       <li><h4> Canone: {{$ann->canone}}€/Mese </h4></li>
                                   </ul>
                                    
                                    
                                    
                                    
                                    @guest
                                    <a href="{{route('login')}}" class="button"> <span>Vedi l'annuncio</span></a> <!-- <div class="banner_copy"> </div>  --> 
                                    @endguest
                                    @auth
                                   <a href="{{route('Ann', $ann->id_alloggio)}}" class="button"><span>Vedi l'annuncio</span></a>
                                    @endauth
                                </div>
                           
                     
                        </section>
          @endforeach
   
    @endisset()

          @include('layouts/_cards')
    @endsection
    
