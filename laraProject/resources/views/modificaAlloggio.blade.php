@extends('welcome')

@section('title', 'Modifica Alloggio')
@section('content')
<link rel="stylesheet" href="{{asset('css/insertAll.css')}}" rel="stylesheet" type="text/css"/>
  <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
        </script>
<script src="{{asset('../resources/js/showImage.js')}}"></script>
<h1 id='title'>Modifica Alloggio
                            </h1>

<h2 id="tornaIndietro" class="btn"><a href="{{route('alloggiLocatore')}}"><span>&laquo Torna indietro</span></a></h2>

    <div class="allInsert">
        
        {{ Form::open(array(route('updateAlloggio',[$selected->id_alloggio]), 'method' => 'POST', 'files' => true))}}
        @csrf
        {{Form::label('tipologia', 'Tipologia')}}
        {{Form::select('tipologia',  array(1 => 'Posto letto', 2 => 'Appartamento'))}}
         @if ($errors->first('tipologia'))
        <ul class="errors">
            @foreach ($errors->get('tipologia') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
        <div class="canone">
        {{Form :: label('canone', 'Canone mensile (€)')}}
        {{ Form :: number('canone', $selected->canone)}}
         @if ($errors->first('canone'))
        <ul class="errors">
            @foreach ($errors->get('canone') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
        {{Form :: label('dimensione', 'Dimensione (Mq)')}}
        {{ Form :: number('dimensione', $selected->dimensione)}}
         @if ($errors->first('dimensione'))
        <ul class="errors">
            @foreach ($errors->get('dimensione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        </div>
        <div class ="local">
            {{Form::label('citta', 'Città')}}<br>
        {{Form::select('citta', array('Ancona' => 'Ancona', 'Milano'=> 'Milano', 'Torino' => 'Torino'))}}              
        @if ($errors->first('citta'))
        <ul class="errors">
            @foreach ($errors->get('citta') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        </div>

        <div class="ind">
            {{Form::label('indirizzo', 'Indirizzo')}}
            {{Form::text('indirizzo', $selected->indirizzo)}}
        </div>
        
        
        <div class="per">
        {{Form::label('data_inizio_locazione', 'Data inizio locazione')}}
        {{Form::date('data_inizio_locazione', $selected->data_inizio_locazione)}}
               @if ($errors->first('data_inizio_locazione'))
        <ul class="errors">
            @foreach ($errors->get('data_inizio_locazione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        <br>
         {{Form::label('data_fine_locazione', 'Data fine locazione')}}<br><br>
        {{Form::date('data_fine_locazione', $selected->data_fine_locazione)}}
               @if ($errors->first('data_fine_locazione'))
        <ul class="errors">
            @foreach ($errors->get('data_fine_locazione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        </div>
           
        <div class="numerocamere">
            {{Form::label('numero_camere', 'Numero camere')}}
            {{Form::number('numero_camere', $selected->numero_camere)}}
                 @if ($errors->first('numero_camere'))
        <ul class="errors">
            @foreach ($errors->get('numero_camere') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        </div>
        <div class="postilettotale">
            {{Form::label('numero_posti_letto_totale', 'Numero posti letto in totale')}}
            {{Form::number('numero_posti_letto_totale', $selected->numero_posto_letto_totale)}}
                 @if ($errors->first('numero_posti_letto_totale'))
        <ul class="errors">
            @foreach ($errors->get('numero_posti_letto_totale') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        </div>
        <div class="lettinellacamera">
            {{Form::label('numero_letti_nella_camera', 'Numero letti nella camera')}}
            {{Form::number('numero_letti_nella_camera', $selected->numero_letti_nella_camera)}}
                 @if ($errors->first('numero_letti_nella_camera'))
        <ul class="errors">
            @foreach ($errors->get('numero_letti_nella_camera') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        </div>
        
        <div class="des">
            {{Form::label('descrizione', 'Descrizione')}}<br>
            {{Form::textarea('descrizione',$selected->descrizione)}}
        </div>
        @if ($errors->first('descrizione'))
        <ul class="errors">
            @foreach ($errors->get('descrizione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
 <div class="servizi">
            {{Form::label('cucina', 'Cucina')}}<br>
            {{Form::checkbox('cucina', $servizi->cucina)}}
        </div>
        @if ($errors->first('cucina'))
        <ul class="errors">
            @foreach ($errors->get('cucina') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
         <div class="servizi">
            {{Form::label('locRicr', 'Locali Ricreativi')}}<br>
            {{Form::checkbox('locRicr', $servizi->locRicr)}}
        </div>
        @if ($errors->first('locRicr'))
        <ul class="errors">
            @foreach ($errors->get('locRicr') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
         <div class="servizi">
            {{Form::label('angoloStudio', 'Angolo Studio')}}<br>
            {{Form::checkbox('angoloStudio', $servizi->angoloStudio)}}
        </div>
        @if ($errors->first('angoloStudio'))
        <ul class="errors">
            @foreach ($errors->get('angoloStudio') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        <div class="file">
            {{Form::label('image', 'Carica foto')}}
            
            <input accept="image/x-png,image/gif,image/jpeg" name="image" type="file" id="image" value="{{$foto}}" onchange="previewFile(this);">
        </div>
             <div class ="holder">
              <img id="previewImg" src="" alt=""/>
            </div>
       
       
    <div class="inv">
        {{Form::submit('Invia', ['class'=>'login-btn'])}}
        {{Form::close()}}
    </div>
</div>    


@endsection