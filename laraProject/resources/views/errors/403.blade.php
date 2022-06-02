@extends('welcome')

@section('title', 'Errore')
@section('content')
 
<div style="margin-left:25%; margin-right: 25%">
    <div class="container mt-5 pt-5">
        <div style= "   text-align: center;
                        vertical-align: middle;
                        line-height: 90px;">
            <h2 style="font-size: 30px;
                border: 3px solid green;">Errore 403</h2>
            <p style=""font-size: 70px">Utente non autorizzato.</p>
            
        </div>
    </div>
    <a href="{{route('Home')}}">
        <img src="{{asset('../storage/app/public/errors/error403.jpg')}}" 
             style="
         vertical-align: middle;
          padding: 15px;
          display: block;
          margin-left: auto;
          margin-right: auto;
          border-image: url(border.png) 50 round;
          width: 50%;
          height: auto;" 
          alt=""> 
    </a>
         
</div>  
@endsection
