@extends('welcome')

@section('title', 'Mie Alloggio')
@section('content')


<h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Mie Alloggi
        </h1>


<section>
        <div class="titolo"><a href="inserisci_alloggio" class="inserisci">Nuovo Alloggio</a></div>
        <div>
           <?php if (Session::has('annuncio_cancellato')) :?>
           <div class="alert" role="alert">
           {{Session::get('alloggio_cancellato')}}
           </div>
           <?php endif ?>
        <table>
                <thead>
                <tr>
                    <th>ID</th>              
                    <th>Tipologia</th>
                    <th>Data inserimento</th>
                    <th>Canone</th>
                    <th>Dimenzione</th>
                    <th>Citta</th>
                    <th>Indirizzo</th>
                    <th>Numero camere</th>
                    <th>Numero Posto Letto Totale</th>
                    <th>Numero letti nella camera</th>
                    <th>Descrizione</th>
                    <th>Data Inizio Locazione</th>
                    <th>Data Fine Locazione</th>
                    <th>Action</th> 
                </tr>
                
            </thead>
            <tbody>
                <?php foreach($alloggios as $post) :?>
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->tipologia}}</td>
                    <td>{{$post->data_inserimento}}</td> 
                    <td>{{$post->canone}}</td>
                    <td>{{$post->dimenzione}}</td>
                    <td>{{$post->citta}}</td> 
                    <td>{{$post->indirizzo}}</td>
                    <td>{{$post->descrizione}}</td>
                    <td>{{$post->data_inizio_locazione}}</td>
                    <td>{{$post->data_fine_locazione}}</td>
                    <td>{{$post->numero_camere}}</td>
                    <td>{{$post->numero_posto_letto_totale}}</td>
                    <td>{{$post->numero_letti_nella_camera}}</td>
                    <td>{{$post->etat}}</td>          
                    <td>
                        <a href="/alloggi/{{$alloggio->id}}" class="btn_alloggio">Dettaglio Alloggio</a>
                        <a href="/modifica_alloggio/{{$alloggio->id}}" class="btn_modifica">Modifica Alloggio</a>
                        <a href="/cancelli_alloggio/{{$alloggio->id}}" class="btn_cancelli">Cancelli Alloggio</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        
    </div>
    </section>

    @endsection