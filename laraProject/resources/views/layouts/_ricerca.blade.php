
<link rel="stylesheet" href="{{asset('css/searchstyle.css')}}" rel="stylesheet" type="text/css"/>
<div class="container">
    
<div id="formId" class="searchForm">
    {{ Form::open(array('route' => 'RicercaCatalogo', 'class' => 'searchForm')) }}
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
 
        {{Form::label('tipologia', 'Tipologia')}}
        {{Form::select('tipologia', array(1 => 'Posto letto', 2=> 'Appartamento'))}}
        @if ($errors->first('tipologia'))
        <ul class="errors">
            @foreach ($errors->get('tipologia') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif


    {{Form::label('dimensionemax', 'Dimensione Massima (Mq)')}}
    {{ Form::number('dimensionemax') }}
 @if ($errors->first('dimensionemax'))
        <ul class="errors">
            @foreach ($errors->get('dimensionemax') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
         
    {{Form::label('dimensionemin', 'Dimensione Minima (Mq)')}}
    {{ Form::number('dimensionemin') }}
    @if ($errors->first('dimensionemin')))
        <ul class="errors">
            @foreach ($errors->get('dimensionemin') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

    {{Form::label('prezzomax', 'Prezzo massimo(€/Mese)')}}
    {{ Form::number('prezzomax') }}
    @if ($errors->first('prezzomax'))
        <ul class="errors">
            @foreach ($errors->get('prezzomax') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

       {{Form::label('prezzomin', 'Prezzo minimo(€/Mese)')}}
    {{ Form::number('prezzomin') }}
    @if ($errors->first('prezzomin'))
        <ul class="errors">
            @foreach ($errors->get('prezzomin') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

    {{Form::label('numerocamere', 'Numero camere')}}
    {{ Form::number('numerocamere') }}
    @if ($errors->first('numerocamere'))
        <ul class="errors">
            @foreach ($errors->get('numerocamere') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{Form::label('numeropostiletto', 'Numero posti letto')}}
    {{ Form::number('numeropostiletto') }}
    @if ($errors->first('numeropostiletto'))
        <ul class="errors">
            @foreach ($errors->get('numeropostiletto') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{Form::label('lettinellacamera', 'Numero letti nella camera')}}
    {{ Form::number('lettinellacamera') }}
    @if ($errors->first('lettinellacamera'))
        <ul class="errors">
            @foreach ($errors->get('lettinellacamera') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

         {{Form::label('data_inizio_locazione', 'Dal')}}
    {{ Form::date('data_inizio_locazione', date('Y-m-d')) }}
    @if ($errors->first('data_inizio_locazione'))
        <ul class="errors">
            @foreach ($errors->get('data_inizio_locazione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{Form::label('data_fine_locazione', 'Al')}}
    {{ Form::date('data_fine_locazione', date('Y-m-d')) }}
    @if ($errors->first('data_fine_locazione'))
        <ul class="errors">
            @foreach ($errors->get('data_fine_locazione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif


        
        {{Form::submit('Cerca', ['class'=>'login-btn'])}}
        {{Form::reset('Reset', ['class'=>'login-btn'])}}
    </tr>
    </table>

{{Form::close()}}

        </div></div>