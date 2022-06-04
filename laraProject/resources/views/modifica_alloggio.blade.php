@extends('welcome')

@section('title', 'Modifica Alloggio')
@section('content')


<h1 style="margin: auto;
        width: 50%;
        border: 3px solid green;
        padding: 10px;
        text-align: center;
        margin-top: 30px;
        margin-bottom: 30px;">Modifica Alloggi
</h1>

        <a href="http://127.0.0.1:8000/alloggios">Mie Alloggi</a>
        <div class="modif">
                <h1>Modifica Alloggi</h1>
        </div>

        <div class="main">
                <?php if (Session::has('alloggio_modificato'))  :?>
                        <div class="alert" role="alert">
                        {{Session::get('alloggio_modificato')}}
                        </div>
                <?php endif ?>

                <form method="POST" action="{{route('alloggio.salvato')}}"> 
                        @csrf
                        <input type="hidden" name="id_alloggio" value="{{$post->id_alloggio}}" />
           

<!--   
                        <div class="scelta">
                                <select class="option" name="tipologia" id="" value="{{$post->tipologgia}}">
                                <option disabled="disabled" selected="selected">Tipologia</option>
                                <option>APPARTAMENTO</option>
                                <option>POSTO LETTO</option>
                                </select>  
                        </div>
                -->
                        <div class="posti">
                                <label for="data_inserimento">Data Inserimento: </label>
                                <input type="date" id="start" name="data_inserimento"   value="2022-01-01" min="2022-01-01" max="2050-12-31" value="{{$post->data_inserimento}}">                             
                        </div>  


                        <div class="canone"> 
                                <label for="canone">Canone (€):</label>    
                                <input class="champ" type="text" id="" name=" canone" placeholder="prezzo" value="{{$post->canone}}"> 

                                <label for="dimenzione">Dimensione (Mq) :</label>    
                                <input class="champ" type="text" id="" name="dimensione" placeholder="dimensione dell'appartamento/posto letto"  value="{{$post->dimensione}}">   
                        </div>

                        <div class="local">
                                <label for="citta">Citta :</label>
                                <input type="text" id="" name="citta" placeholder="Ancona, Roma" value="{{$post->citta}}">

                                <label for="indirizzo">Indirizzo: </label>
                                <input class="champ" type="text" id="" name="indirizzo" placeholder="indirizzo di localizzazione" value="{{$post->indirizzo}}">                            
                        </div> 

                        <div class="per">
                                <label class="date" for="data_inizio_locazione">Data Inizio Locazione: </label>
                                <input type="date" id="start" name="data_inizio_locazione"   value="2022-01-01" min="2022-01-01" max="2050-12-31" value="{{$post->data_inizio_locazione}}">  
                                                                        <h3>A</h3>
                                <label class="date" for="data_fine_locazione">Data Fine Locazione: </label>
                                <input type="date" id="start" name="data_fine_locazione"   value="2022-01-01" min="2022-01-01" max="2050-12-31" value="{{$post->data_fine_locazione}}">     
                        </div>

                        <div class="posti">
                                <label for="numero_camere">Numero Camere: </label>
                                <input class="champ" type="text" id="" name="numero_camere" placeholder="posti letto" value="{{$post->numero_camere}}">                            
                        </div>  


                        <div class="posti">
                                <label for="numero_posto_letto_totale">Numero Posto Letto Totale: </label>
                                <input class="champ" type="text" id="" name="numero_posto_letto_totale" placeholder="posti letto" value="{{$post->numero_posto_letto_totale}}">                            
                        </div>  

                        <div class="posti">
                                <label for="numero_letti_nella_camera">Numero Letti Nella Camera: </label>
                                <input class="champ" type="text" id="" name="numero_letti_nella_camera" placeholder="posti letto" value="{{$post->numero_letti_nella_camera}}">                            
                        </div>  

                        <div class="des">
                                <label for="descrizione">Descrizione:</label>    
                                <textarea name="descrizione" id="" cols="30" rows="10" >{{$post->descrizione}}</textarea>
                        </div>                        
                        
                        
                        <div class="posti">
                                <label for="etat">etat:</label>
                                <input class="champ" type="text" id="" name="etat" placeholder="posti letto" value="{{$post->etat}}">                            
                        </div>  

                        <div class="file">
                                <p>Carica Imagine</p>
                                <input class="file_upload_input" type="file" onchange="readURL(this)" accept="Image/* ">
                        </div>
                        
                                    
                        <button type="submit" class="btn">Modifica</button>
                
      
                </form>       
        </div>        
 @endsection