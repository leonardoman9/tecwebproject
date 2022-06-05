@extends('welcome')

@section('title', 'Modifica Alloggio')
@section('content')
<link rel="stylesheet" href="{{asset('css/insertAll.css')}}" rel="stylesheet" type="text/css"/>
  <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
        </script>
<script src="{{asset('../resources/js/showImage.js')}}"></script>
<h1 id='title'>Modifica Alloggio</h1>
<h2 id="tornaIndietro"><a href="{{route('alloggiLocatore')}}">Torna indietro</a></h2>
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
            {{Form::label('citta', 'Città')}}
        {{Form::select('citta', array('Ancona' => 'Ancona', 'Milano'=> 'Milano', 'Torino' => 'Torino'))}}              
        @if ($errors->first('citta'))
        <ul class="errors">
            @foreach ($errors->get('citta') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
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
         {{Form::label('data_fine_locazione', 'Data fine locazione')}}
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
            {{Form::label('descrizione', 'Descrizione')}}
            {{Form::textarea('descrizione',$selected->descrizione)}}
        </div>
        @if ($errors->first('descrizione'))
        <ul class="errors">
            @foreach ($errors->get('descrizione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        <div class="file">
        {{Form::label('image', 'Carica foto')}}
      <input accept="image/x-png,image/gif,image/jpeg" name="image" type="file" id="image" value="{{$foto}}" onchange="previewFile(this);">
             <div class ="holder">
              <img id="previewImg" src="" alt=""/>
            </div>
       
        </div>
        {{Form::submit('Invia', ['class'=>'login-btn'])}}
        {{Form::close()}}
</div>    


@endsection