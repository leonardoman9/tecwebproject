@extends('welcome')

@section('title', 'Dettagli Alloggio')
@section('content')
<link href="{{asset('css/det_annuncio.css')}}" rel="stylesheet" type="text/css"/>
<h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Dettagli alloggio
        </h1>
        

    <section id="detaglio_prodotto">
        <div class="imagine_prodotto">
        
                <div class="dettaglio"></div>
                    @isset($post)
                    
                    <div class="tip"> </div>
                    @isset($foto)
                        <img src="../../storage/app/{{$foto->path}}" class='catfoto' onmouseover='bigImg(this)' onmouseout='normalImg(this)'>
                          @else
             
                  <img src="../../public/fotoprova/default.jpg" class="catfoto" >
                        @endisset

                        <div class="app">                        
                        <!--  <h3>Tipologia:</h3> -->   
                             @switch($post->tipologia)
                                 @case(1) <h1><u>Posto letto</u></h1> @break
                                 @case(2) <h1><u>Appartamento</u></h1> @break
                                 @endswitch<br> 
                            

                                    <ul>
                                            <li><h3>Citta: {{$post->citta}}</h3></li>
                                            <li><h3>Indirizzo: {{$post->indirizzo}}</h3></li>
                                            <li><h3>Dimenzione: {{$post->dimensione}} Mq</h3></li>
                                            <li><h3>Numero Posto Letto Totale: {{$post->numero_posto_letto_totale}}</h3></li>
                                            <li><h3>Data Inserimento: {{$post->data_inserimento}}</h3></li>                            
                                            <li><h3>Data Inizio Locazione: {{$post->data_inizio_locazione}}</h3></li>
                                            <li><h3>Data Fine Locazione: {{$post->data_fine_locazione}}</h3></li>
                                            <li><h3>Numero Camere: {{$post->numero_camere}}</h3></li>
                                            <li><h3>Numero Letti Nella Camera: {{$post->numero_letti_nella_camera}}</h3></li>
                                    </ul>
                        
                        </div>
                        <div class="nome"> 
                            <h3>Descrizione: {{$post->descrizione}}</h3><br><br><br><br><br><br><br>
                            
                        </div>
                        <div class="piu">
                            <li><h3>Cucina: {{$servizi->cucina==1 ? "sì" : "no" }}</h3></li>
                            <li><h3>Locale Ricreativo: {{$servizi->localeRicreativo==1 ? "sì" : "no" }}</h3></li>
                            <li><h3>Angolo Studio: {{$servizi->angoloStudio==1 ? "sì" : "no" }}</h3></li>   
                        </div>
                        
                        <div class="can">
                            <h3>Canone:{{$post->canone}} €/Mese</h3>
                        </div>
                        <div id="buttonwrapper" style=" text-align: center; float:left">
            <a href="{{route('modificaAlloggio', $post->id_alloggio)}}" class="btn1">Modifica</a><br>
                        </div>
                        <h2 id="tornaIndietro" class="btn">
                            <a href="{{route('alloggiLocatore')}}"><span>&laquo Torna indietro</span></a></h2>
                  <!--  </div></h3><h4>  </h3><h4> </h3> <h4> </h3><h4>  </h3> <h4>  </h3> <h4>  </h3><h4> </h3><h4> </h3><h4> </h3><h4> </h3><h4> </h3><h4> --> 
                
                                <!--      <div class="buttonF">
                                    <a href="{{route('modificaAlloggio', $post->id_alloggio)}}"  id="modificaButton" > <span> Modifica Allogio</span></a>
                                    <a href="{{route('cancellaAlloggio', $post->id_alloggio)}}"  id="cancellaButton" onclick="return deleteElement();"><span>Cancelli Alloggio</span></a> 
                                </div>-->
                    @endisset
                </div>    
            </div>
        </div>
    </section>
    @endsection