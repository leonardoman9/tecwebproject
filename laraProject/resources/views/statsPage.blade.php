@extends('welcome')

@section('title', 'Gestione FAQ')
@section('content')
 <h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Statistiche
        </h1>







 
{{ Form::open(array('route' => 'StatFiltrate', 'class' => 'searchForm')) }}
@csrf
   {{Form::label('datefrom', 'datefrom')}}
    {{ Form::date('datefrom', date('Y-m-d')) }}
         @if ($errors->first('from'))
             <ul class="errors">
                 @foreach ($errors->get('from') as $message)
                 <li>{{ $message }}</li>
                 @endforeach
             </ul>
         @endif
        <br>
        {{Form::label('dateto', 'dateto')}}
    {{ Form::date('dateto', date('Y-m-d')) }}
    @if ($errors->first('dateto'))
        <ul class="errors">
            @foreach ($errors->get('dateto') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
</div>

        
        {{Form::submit('Cerca', ['class'=>'login-btn'])}}
        
  {{Form::close()}}  
            
        </div>
   
        









<div id="Container">
   
    <table>
        <thead>
            <tr>
                <th>Alloggi</th>
            </tr>
        </thead>
        <tbody>            
            <tr>                 
             <td>{{$n_alloggi}}</td>

            </tr>            
        </tbody>
    </table>   
</div>




@endsection
