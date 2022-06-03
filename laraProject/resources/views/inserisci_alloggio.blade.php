@extends('welcome')

@section('title', 'Inserisci Alloggio')
@section('content')

<h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Inserisci Alloggio
        </h1>


    <div class="main">

    <form method="POST" action="{{route('alloggio.create')}}">
            @csrf

            <div class="scelta">
                <!-- <select class="option" name="tipologia" id="">
                    <option disabled="disabled" selected="selected">Tipologia</option>
                    <option>APPARTAMENTO</option>
                    <option>POSTO LETTO</option>
                </select>     <label for="tipologia">Tipologia: </label>    
                <input class="champ" type="text" id="" name="tipologiae" placeholder="tipologia">  -->
               
               
            </div>

            <div class="posti">
                <label for="data_inserimento">Data Inserimento: </label>
                <input type="date" id="start" name="data_inserimento"   value="2022-01-01" min="2022-01-01" max="2050-12-31">                            
            </div>  


            <div class="canone"> 
                <label for="canone">Canone (€):</label>    
                <input class="champ" type="text" id="" name=" canone" placeholder="prezzo"> 

                <label for="dimenzione">Dimensione (Mq) :</label>    
                <input class="champ" type="text" id="" name="dimensione" placeholder="dimenzione dell'appartamento/posto letto">   
            </div>

            <div class="local">
                <label for="citta">Citta :</label>
                <input type="text" id="" name="citta" placeholder="Ancona, Roma">

                <label for="indirizzo">Indirizzo: </label>
                <input class="champ" type="text" id="" name="indirizzo" placeholder="indirizzo di localizzazione">                            
            </div> 

            <div class="per">
                <label class="date" for="data_inizio_locazione">Data Inizio Locazione: </label>
                <input type="date" id="start" name="data_inizio_locazione"   value="2022-01-01" min="2022-01-01" max="2050-12-31">  
                                                        <h3>A</h3>
                <label class="date" for="data_fine_locazione">Data Fine Locazione: </label>
                <input type="date" id="start" name="data_fine_locazione"   value="2022-01-01" min="2022-01-01" max="2050-12-31">     
            </div>

            <div class="posti">
                <label for="numero_camere">Numero Camere: </label>
                <input class="champ" type="text" id="" name="numero_camere" placeholder="posti letto">                            
            </div>  

            <div class="posti">
                <label for="numero_posto_letto_totale">Numero Posto Letto Totale: </label>
                <input class="champ" type="text" id="" name="numero_posto_letto_totale" placeholder="posti letto">                            
            </div>  

            <div class="posti">
                <label for="numero_letti_nella_camera">Numero Letti Nella Camera: </label>
                <input class="champ" type="text" id="" name="numero_letti_nella_camera" placeholder="posti letto">                            
            </div>  

             <div class="des">
                <label for="descrizione">Descrizione: </label>    
                <textarea name="descrizione" id="" cols="30" rows="10"></textarea>
            </div>                        
            
            
            <div class="posti">
                <label for="etat">etat:</label>
                    <input class="champ" type="text" id="" name="etat" placeholder="posti letto">                            
            </div>  

            <div class="file">
                <p>Carica Imagine</p>
                <input class="file_upload_input" type="file" onchange="readURL(this)" accept="Image/* ">
            </div>

            <!--  
            <div class="posti">
                <label for="added_by">added by: </label>
                <input type="champ" id="" name="added_by" placeholder="added_by"  >                            
            </div>  
            -->                        
               <button type="submit" class="btn">Salva</button>

 </form>       
</div>    

@endsection