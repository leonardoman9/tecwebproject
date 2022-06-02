   
        {{ Form::open(array('route' => 'RicercaCatalogo', 'class' => 'form')) }}
    @csrf
    
    {{Form::label('citta', 'Città')}}
        {{Form::select('citta', array('Ancona' => 'Ancona', 'Milano'=> 'Milano', 'Torino' => 'Torino'))}}

    @if ($errors->first('citta'))
        <ul class="errors">
            @foreach ($errors->get('citta') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
    {{Form::label('dimensionemax', 'Dimensione Massima (Mq)')}}
    {{ Form::text('dimensionemax') }}
 @if ($errors->first('dimensionemax'))
        <ul class="errors">
            @foreach ($errors->get('dimensionemax') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    {{Form::label('dimensionemin', 'Dimensione Minima (Mq)')}}
    {{ Form::text('dimensionemin') }}
    @if ($errors->first('dimensionemin')))
        <ul class="errors">
            @foreach ($errors->get('dimensionemin') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    {{Form::label('prezzomax', 'Prezzo massimo(Mese)')}}
    {{ Form::text('prezzomax') }}
    @if ($errors->first('prezzomax'))
        <ul class="errors">
            @foreach ($errors->get('prezzomax') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
       {{Form::label('prezzomin', 'Prezzo minimo')}}
    {{ Form::text('prezzomin') }}
    @if ($errors->first('prezzomin'))
        <ul class="errors">
            @foreach ($errors->get('prezzomin') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    
    {{Form::label('numerocamere', 'Numero camere')}}
    {{ Form::text('numerocamere') }}
    @if ($errors->first('numerocamere'))
        <ul class="errors">
            @foreach ($errors->get('numerocamere') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        {{Form::label('numeropostiletto', 'Numero posti letto')}}
    {{ Form::text('numeropostiletto') }}
    @if ($errors->first('numeropostiletto'))
        <ul class="errors">
            @foreach ($errors->get('numeropostiletto') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        {{Form::label('lettinellacamera', 'Numero letti nella camera')}}
    {{ Form::text('lettinellacamera') }}
    @if ($errors->first('lettinellacamera'))
        <ul class="errors">
            @foreach ($errors->get('lettinellacamera') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
        {{Form::label('tipologia', 'Tipologia')}}
        {{Form::select('tipologia', array(1 => 'Posto letto', 2=> 'Appartamento'))}}
        
        
        {{Form::submit('Cerca', ['class'=>'login-btn'])}}
{{Form::close()}}

        