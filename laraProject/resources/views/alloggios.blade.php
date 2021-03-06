@extends('welcome')

@section('title', 'Alloggi pubblicati')
@section('content')
<link href="{{asset('css/insertAll.css')}}" rel="stylesheet" type="text/css"/>
<script src="{{asset('../resources/js/confirmDelete.js')}}"></script>

<h1 id="title" style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Miei Alloggi
        </h1>

<section>
    <div>
         <div id="buttonwrapper" style=" text-align: center; float:left">
                    <a href="{{route('nuovoAlloggio')}}">
                     <input type="button" class="btn-accedi" id="aggiungi" value="Aggiungi" onclick="addFaq()" />
                     </a>
                    </div>
                     
        <table class="floatingForm"  id="alloggiosTable">
            <thead>
                <tr>
                    <th>Data inserimento</th>
                    <th>Canone</th>
                    <th>Dimensione</th>
                    <th>Citta</th>
                    <th>Indirizzo</th>
                    <th>Numero camere</th>
                    <th>Numero Posto Letto Totale</th>
                    <th>Numero Letti Nella Camera</th>
                    <th>Descrizione</th>
                    <th>Data Inizio Locazione</th>
                    <th>Data Fine Locazione</th>
                    <th>Azione</th> 
                    <th>Richieste di locazione</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($alloggios as $post) :?>   
                
                    <tr>
                       
                <!--    <td>{{$post->tipologia}}</td> -->
                        <td>{{$post->data_inserimento}}</td> 
                        <td>{{$post->canone}}</td>
                        <td>{{$post->dimensione}}</td>
                        <td>{{$post->citta}}</td> 
                        <td>{{$post->indirizzo}}</td>
                        <td>{{$post->numero_camere}}</td>
                        <td>{{$post->numero_posto_letto_totale}}</td>
                        <td>{{$post->numero_letti_nella_camera}}</td>
                        <td>{{$post->descrizione}}</td>
                        <td>{{$post->data_inizio_locazione}}</td>
                        <td>{{$post->data_fine_locazione}}</td>
                        

                        <td class="button1">
                            <a href="{{route('visualizzaAlloggio', $post->id_alloggio)}}" class="btn1">Dettagli</a><br>
                            <a href="{{route('modificaAlloggio', $post->id_alloggio)}}" class="btn1">Modifica</a><br>
                            <a href="{{route('cancellaAlloggio', $post->id_alloggio)}}" class="btn1" onclick="return deleteElement();">Cancella</a> 
                        </td>
                        <td  class="button1"> <a href="{{route('RichiesteLocazione', $post->id_alloggio)}}" class="btn1">Visualizza</a></td>
                    </tr>
                <?php endforeach ;?>
                   
                    
            
            </tbody>
        </table>
        
    </div>
</section>

@endsection