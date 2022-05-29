@extends('welcome')
@section('title', 'Annuncio')

    @section('content')
     <section id="detaglio_prodotto" class="section_p1">
        <div class="imagine_prodotto">
            <div class="img_group">
                
                @if($foto===0){
                    <div class="img_color">
                    <img src="../../public/foto/default.jpg" class="catfoto"alt=""/>
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
            <h4>Periodo di locazione: {{$ann->periodo_di_locazione}}</h4>
            <h4>Citta: {{$ann->citta}}</h4>
            <h4>Indirizzo: {{$ann->indirizzo}}</h4>
            <h5>{{$ann->descrizione}}</h5>
                 
        </div>
       </section>

    <section class="proprietario ">
         <div class="datti">
             <div class="nome">
                <h2>Informazioni Proprietario</h2>
                <h3>Nome : ......</h3>
                <h3>Telefono :34567890</h3>
                <h3>Mail : wertyuio</h3>
             </div>
           
        </div>
        <div class="contact">
                <h3>prezzo : {{$ann->prezzo}}</h3>
                <a href="">Contatta</a>
                <!--<button type=""></button>-->
            </div>
    </section>  
    
    
 
    @endsection
    

     
    
