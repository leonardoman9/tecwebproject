@extends('welcome')

@section('title', 'Gestione FAQ')
@section('content')


<script>
    function deleteFaq(){ 
        
        let text;
       
       if(confirm("Sei sicuro di voler eliminare la FAQ selezionata?")){
             var radios = jQuery("input[type='select']");
             radios.filter(":checked")
           alert(radios);
           
           
       }
       
       alert(text);
    }
    
</script>


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
    <a href="{{ route('form_faq') }}">
    <input type="button" class="btn-accedi" id="tst" value="Aggiungi" onclick="addFaq()" />
    </a>

    <table id='table' class='table'>
        <th><h2>MOD/DEL</h2></th>
        <th><h2>Domanda</h2></th>
        <th><h2>Risposta</h2></th>
         <th></th>
        @foreach ($allFaqs as $faq)
        <tr>
            
       <th>
                <a class="Button" href="{{ route('modifica_faq', [$faq->id]) }}">
                   <button type="submit"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></button>
                </a>
                <a class="Button" onclick="return conferma();" href="{{ route('elimina_faq', [$faq->id]) }}">
                    <button type="submit"><i class="fa fa-trash fa-lg"></i></button>
                </a>
        </th>    
            <th><h3>{{$faq->domanda}} </h3></th>
            <th> {{$faq->risposta}} </th>
            
            <th> </th>
        </tr>
        @endforeach
    </table>
    
        
    @endisset()
    
    <br><br>
@endsection
