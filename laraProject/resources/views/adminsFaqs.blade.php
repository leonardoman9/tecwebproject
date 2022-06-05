@extends('welcome')
<script src="{{asset('../resources/js/confirmDelete.js')}}"></script>


@section('title', 'Gestione FAQ')
@section('content')

    <div id="buttonwrapper" style="margin-top: 40px;">
    <a href="{{ route('form_faq') }}">
    <input type="button" class="btn-accedi" id="tst" value="Aggiungi" onclick="addFaq()" />
    </a>
    </div>
<br><br>
    @isset($allFaqs)
        <h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Aggiungi, modifica o elimina FAQs
        </h1>
    <table id='table' class='floatingForm'>
        @if($allFaqs->count()==0)
            <th><h2>Non ci sono FAQs.</h2></th>
        
        @else 
            <th><h2>Modifica</h2></th>
            <th><h2>Elimina</h2></th>
            <th><h2>Domanda</h2></th>
            <th><h2>Risposta</h2></th>
             <th></th>
            @foreach ($allFaqs as $faq)
            <tr>

           <th>
                    <a class="Button" href="{{ route('modifica_faq', [$faq->id]) }}">
                       <button type="submit"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></button>
                    </a>
           </th>
           <th>
                    <a class="Button" onclick="return deleteElement();" href="{{ route('elimina_faq', [$faq->id]) }}">
                        <button type="submit"><i class="fa fa-trash fa-lg"></i></button>
                    </a>
            </th>    
                <th><h3>{{$faq->domanda}} </h3></th>
                <th> {{$faq->risposta}} </th>

                <th> </th>
            </tr>
            @endforeach

        
        @endif
    </table>
    @endisset()
    
    <br><br>
@endsection
