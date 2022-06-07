<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script href={{asset("resources/js/searchform.js")}} type="text/javascript">
    $( document ).ready(function() {
    $("#scelta").on("change", function() {
                $("#" + $(this).val().toString()).show().siblings().hide();
                $($(this).show())
            })
});




</script>
<link rel="stylesheet" href="{{asset('css/searchstyle.css')}}" rel="stylesheet" type="text/css"/>
<div class="container">
    
    <div id="formId" class="searchForm">
        Ricerca
        
         <select id="scelta">
            <option value=1>Posto letto</option>
            <option value=2>Appartamento</option>
        </select>
        @if ($errors->first('tipologia'))
        <ul class="errors">
            @foreach ($errors->get('tipologia') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
        <div id="2" style="display:none" >
            {{ Form::open(array('route' => 'RicercaCatalogo', 'class' => 'searchForm')) }}
            @csrf
         <input type="hidden" name="tipologia" value="2">
        @if ($errors->first('tipologia'))
        <ul class="errors">
            @foreach ($errors->get('tipologia') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
        {{Form::label('citta', 'Città')}}
        @isset($request)
         {{Form::select('citta', array('Ancona' => 'Ancona', 'Milano'=> 'Milano', 'Torino' => 'Torino'), null, array('placeholder' => $request->citta))}}
        @else
        {{Form::select('citta', array('Ancona' => 'Ancona', 'Milano'=> 'Milano', 'Torino' => 'Torino'))}}
        @endisset
    @if ($errors->first('citta'))
        <ul class="errors">
            @foreach ($errors->get('citta') as $message)
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

         {{Form::label('data_inizio_locazione', 'Dal')}}
    {{ Form::date('data_inizio_locazione', date('Y-m-d')) }}
    @if ($errors->first('data_inizio_locazione'))
        <ul class="errors">
            @foreach ($errors->get('data_inizio_locazione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        <br>
        {{Form::label('data_fine_locazione', 'Al')}}
    {{ Form::date('data_fine_locazione', date('Y-m-d')) }}
    @if ($errors->first('data_fine_locazione'))
        <ul class="errors">
            @foreach ($errors->get('data_fine_locazione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        <div class="servizi">
             {{Form::label('cucina', 'Cucina')}}
        {{Form::checkbox('cucina')}}
         @if ($errors->first('cucina'))
        <ul class="errors">
            @foreach ($errors->get('cucina') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
         {{Form::label('locRicr', 'Locale Ricreativo')}}
        {{Form::checkbox('locRicr')}}
         @if ($errors->first('locRicr'))
        <ul class="errors">
            @foreach ($errors->get('locRicr') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        </div>
       

        
        {{Form::submit('Cerca', ['class'=>'login-btn'])}}
        {{Form::reset('Reset', ['class'=>'login-btn'])}}
     {{Form::close()}}  
        </div>
        <div id="1" >
             {{ Form::open(array('route' => 'RicercaCatalogo', 'class' => 'searchForm')) }}
                @csrf
           <input type="hidden" name="tipologia" value="1">
        @if ($errors->first('tipologia'))
        <ul class="errors">
            @foreach ($errors->get('tipologia') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
          
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
        <br>
        {{Form::label('data_fine_locazione', 'Al')}}
    {{ Form::date('data_fine_locazione', date('Y-m-d')) }}
    @if ($errors->first('data_fine_locazione'))
        <ul class="errors">
            @foreach ($errors->get('data_fine_locazione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
 <div class="servizi">
             {{Form::label('angoloStudio', 'Angolo Studio')}}
        {{Form::checkbox('angoloStudio')}}
         @if ($errors->first('angoloStudio'))
        <ul class="errors">
            @foreach ($errors->get('angoloStudio') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
        
        </div>

        
        {{Form::submit('Cerca', ['class'=>'login-btn'])}}
        {{Form::reset('Reset', ['class'=>'login-btn'])}}
  {{Form::close()}}  
            
        </div>
   
        
        

       
     
<!--        <script>
            $("#wdwd").on("change", function() {
                $("#" + $(this).val().toString()).show().siblings().hide();
                $($(this).show())
            })
        </script>-->
        
        
        

    </div>

</div>