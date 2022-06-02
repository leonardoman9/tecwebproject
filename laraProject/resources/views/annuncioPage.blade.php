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
     <section id="detaglio_prodotto" class="section_p1">
        <div class="imagine_prodotto">
            <div id="image-wrapper" class="img_group">
                
                @if($foto===0){
                    <div id="img_color" class="img_color">
                    <img id="mainimage" src="../../public/foto/default.jpg" class="catfoto"alt=""/>
                </div>
                }
                @else
                <div class="img_color">
                    <img src="../../{{$foto->path}}" class="catfoto" >
                </div>
                @endif
            </div>
               
        </div>

        <div class="detagio_prod">
             @switch($ann->tipologia)
             @case(0) <h1> <u>POSTO LETTO </u></h1> @break
             @case(1) <h1> <u>APPARTAMENTO</u></h1> @break
             @endswitch
            <h4>Superficie: {{$ann->dimensione}} Mq</h4>
            <h4>Numero posto letti: {{$ann->numero_posto_letto_totale}}</h4>
            <h4>Periodo di locazione: dal {{$ann->data_inizio_locazione}} al {{$ann->data_fine_locazione}}</h4>
            <h4>Citta: {{$ann->citta}}</h4>
            <h4>Indirizzo: {{$ann->indirizzo}}</h4>
            <h5>{{$ann->descrizione}}</h5>
                 
        </div>
       </section>

    <section class="proprietario ">
         <div class="datti">
             <div class="nome">
                <h2>Informazioni Proprietario</h2>
                <h3>Nome: {{$poster->value('added_by')}}</h3>
<!--                <h3>Telefono: 34567890</h3>-->
<!--                <h3>Mail: wertyuio</h3>-->
<br><br>
             </div>
           
        </div>
        <div class="contact">
                <h3>Prezzo: €/Mese {{$ann->canone}}</h3>
                <a href="">Contatta</a>
                <!--<button type=""></button>-->
            </div>
    </section>  
    
    
 
    @endsection
    

     
    
