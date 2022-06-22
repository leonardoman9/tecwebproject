@extends('welcome')

@section('title', 'Statistiche')
@section('content')
 <h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Statistiche
        </h1>
 
        
       <div class="floatingForm">
{{ Form::open(array('route' => 'StatFiltrate', 'class' => 'searchForm')) }}

@csrf
<div class="element">
    {{Form::label('statistica', 'Statistica da visualizzare')}}
    {{Form::select('statistica', array(
                'offerteDiAlloggio' => 'Offerte di alloggio presenti nel sito', 
                'offerteLocazioneDaLocat'=> 'Offerte di locazione fatte dai potenziali locatari', 
                'alloggiLocati' => 'Alloggi Locati') )
                }}
</div>

<div class="element">
    <label for="scelta">Tipo di annunci</label>
      {{Form::select('scelta', 
          array(3 => 'Tutti', 
                 2=> 'Posto letto', 
                 1 => 'Appartamento')
                   )}}        
     @if ($errors->first('scelta'))
        <ul class="errors">
            @foreach ($errors->get('scelta') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
</div> 
<div class="element">
 {{Form::label('data_inizio', 'Dal')}}
    {{ Form::date('data_inizio', date('Y-m-d')) }}
    @if ($errors->first('data_inizio'))
        <ul class="errors">
            @foreach ($errors->get('data_inizio') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
        {{Form::label('data_fine', 'Al')}}
    {{ Form::date('data_fine', date('Y-m-d')) }}
    @if ($errors->first('data_fine'))
        <ul class="errors">
            @foreach ($errors->get('data_fine') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        </div> 
<div class="element">
        {{Form::submit('Cerca', ['class'=>'login-btn'])}}
          </div> 
{{Form::close()}}  

       </div>
@isset($request)
@isset($result)
<div class="floatingForm">
    @if($request['statistica']==='offerteDiAlloggio')
        <b>Alloggi locati</b> dal <b>{{$request['data_inizio']}}</b> al <b>{{$request['data_fine']}}</b> della tipologia "        
            @switch($request['scelta'])
            @case(1)<b>Appartamento</b> @break
            @case(2)<b>Posto letto</b> @break
            @case(3)<b>Tutti</b> @break
            @endswitch
            ": <b>{{$result}}</b>
            
    @elseif($request['statistica']==='offerteLocazioneDaLocat')
     <b>Offerte da potenziali locatari</b> dal <b>{{$request['data_inizio']}}</b> al <b>{{$request['data_fine']}}</b> della tipologia "        
            @switch($request['scelta'])
            @case(1)<b>Appartamento</b> @break
            @case(2)<b>Posto letto</b> @break
            @case(3)<b>Tutti</b> @break
            @endswitch
            ": <b>{{$result}}</b>    
            
    @elseif($request['statistica']==='alloggiLocati')
     <b>Alloggi locati </b> dal <b>{{$request['data_inizio']}}</b> al <b>{{$request['data_fine']}}</b> della tipologia "        
            @switch($request['scelta'])
            @case(1)<b>Appartamento</b> @break
            @case(2)<b>Posto letto</b> @break
            @case(3)<b>Tutti</b> @break
            @endswitch
            ": <b>{{$result}}</b>  
    @endif
</div>
@endisset
@endisset
@endsection
 