@extends('welcome')
@section('title', 'Catalogo')
<link href="{{asset('css/catal.css')}}" rel="stylesheet" type="text/css"/>
<script src="{{asset('../resources/js/confirmDelete.js')}}"></script>
    @section('content')
    <div class ="content">
    @auth
    <div class="ricercaForm">
   
        @include('layouts/_ricerca')

          
    </div>
    @endauth
   
    @guest
    
<h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Accedi per ricercare annunci
        </h1>
    @endguest
    
    @isset($latestAnn)
    <div class="resAnns">
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
                                 @case(1) <h3> <u> {{$ann->citta}} -  POSTO LETTO in {{$ann->indirizzo}}</u></h3> @break
                                 @case(2) <h3> <u>{{$ann->citta}} -  APPARTAMENTO in {{$ann->indirizzo}}</u></h3> @break
                                 @endswitch
                               <p>
                                   {{$ann->descrizione}}
                               </p>
                               <div class="prezzo">
                                   <ul>
                                       <li><h4>  Camere: {{$ann->numero_camere}}</h4></li>
                                       <li><h4>  Posti letto:  {{$ann->numero_posto_letto_totale}} </h4></li>
                                       <li><h4> Dimensione:  {{$ann->dimensione}} Mq</h4></li>
                                       <li><h4> Canone: {{$ann->canone}}€/Mese </h4></li>
                                   </ul>
                                    
                                    
                                    
                                    
                                @guest
                                 <a href="{{route('login')}}" class="button">Vedi l'annuncio</a>
                                 @endguest
                                 @auth
                                 <a href="{{route('Ann', $ann->id_alloggio)}}" class="button">Vedi l'annuncio</a>
                                 @endauth
                                </div>
                         </div>
                     </div>
                    
                     
                      </section>
          @endforeach
          @include('pagination.paginator', ['paginator' => $latestAnn])
    </div>
       <!--Paginazione-->
    
    @endisset()
    
    @isset($results)
   <div class="resAnns">
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
                                 @case(1) <h3> <u> {{$ann->citta}} -  POSTO LETTO in {{$ann->indirizzo}}</u></h3> @break
                                 @case(2) <h3> <u>{{$ann->citta}} -  APPARTAMENTO in {{$ann->indirizzo}}</u></h3> @break
                                 @endswitch
                               <p>
                                   {{$ann->descrizione}}
                               </p>
                               <div class="prezzo">
                                   <ul>
                                       <li><h4>  Camere: {{$ann->numero_camere}}</h4></li>
                                       <li><h4>  Posti letto:  {{$ann->numero_posto_letto_totale}} </h4></li>
                                       <li><h4> Dimensione:  {{$ann->dimensione}} Mq</h4></li>
                                       <li><h4> Canone: {{$ann->canone}}€/Mese </h4></li>
                                   </ul>
                                    
                                    
                                    
                                    
                                @guest
                                 <a href="{{route('login')}}" class="button">Vedi l'annuncio</a>
                                 @endguest
                                 @auth
                                 <a href="{{route('Ann', $ann->id_alloggio)}}" class="button">Vedi l'annuncio</a>
                                 @endauth
                                </div>
                         </div>
                     </div>
                     
                      </section>
          @endforeach
</div>
    @endisset
  
</div>
    
    @endsection


     
    
