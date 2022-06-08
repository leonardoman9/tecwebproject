@extends('welcome')
@section('title', 'Annuncio')
<script>
    
$("#mainimage").elevateZoom({
    zoomType: "lens",
    lensShape: "round",
    lensSize: 300
});


//on page load hide the container which plugin is applied 
$('#img_color').hide();    

$("#image-wrapper").click(function () {
   // hide matched element if shown, shows if element is hidden
   $('#image1-container, #image2-container').toggle();    
});
</script>

    @section('content')
    
    <link href="{{asset('css/det_annuncio.css')}}" rel="stylesheet" type="text/css"/>

        <h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Dettagli Annuncio
        </h1>
    
   

    <section id="detaglio_prodotto">
        <div class="imagine_prodotto">
            <!--      <div id="image-wrapper" class="img_group">--> 
                
               @if($foto===0){
                <!-- <div id="img_color" class="img_color"></div> -->
                    <img id="mainimage" src="../../public/fotoprova/default.jpg" class="catfoto"alt=""/>
                
                }
                @else
              <!-- <div class="img_color"></div> -->  
                  @php echo "<img src=../../storage/app/{$foto->path}" @endphp class="catfoto" >
                
                @endif      
      

            <div class="app">
                @switch($ann->tipologia)
                @case(2) <h1> <u>POSTO LETTO </u></h1> @break
                @case(1) <h1> <u>APPARTAMENTO</u></h1> @break
                @endswitch <br><br>

                <ul>
                    
                    <li><h3>Citta: {{$ann->citta}}</h4></li>
                    <li><h3>Indirizzo: {{$ann->indirizzo}}</h3></li>
                    <li><h3>Superficie: {{$ann->dimensione}} Mq</h3></li>
                    <li><h3>Numero posto letti: {{$ann->numero_posto_letto_totale}}</h3></li>
                    <li><h3>Periodo di locazione: dal {{$ann->data_inizio_locazione}} al {{$ann->data_fine_locazione}}</h3></li>
                    <h2>Servizi disponibili:</h2>
                        @switch($servizi->cucina)
                        @case(1) <li><h3>Cucina</h3></li> @break
                        @case(0) <h3></h3>@break
                        @endswitch
                        @switch($servizi->localeRicreativo)
                        @case(1) <li><h3>Locale Ricreativo</h3></li> @break
                        @case(0) <h3></h3>@break
                        @endswitch
                        @switch($servizi->angoloStudio)
                        @case(1) <li><h3>Angolo studio</h3></li> @break
                        @case(0) <h3></h3>@break 
                       
                </ul>
                
                    @endswitch
            </div>
        </div>
         
        <div class="nome"> 
                 
                <h3>{{$ann->descrizione}}</h3> <br><br><br><br>
                <h1>Prezzo: €/Mese {{$ann->canone}}</h1><br>
                <h2>Annuncio postato da: {{$poster->value('added_by')}}</h2><br>
        </div>
        
</div>
         @can('isLocatario')

        <div class="prezzo">
               @can('isLocatario')
        <div class="contact">
                
                @if($accettata->isEmpty())
                     <a href="{{route('messaggio', [$ann->id_alloggio]) }}">Contatta</a>
                     @else
                     <h1 style="text-align:center">Offerta non più opzionabile.</h1>
                @endif
                
                <!--<button type=""></button>-->
            </div>
         
         @endcan
        </div>
    @endcan
 </section>
         
        
    @endsection
    

     
    
