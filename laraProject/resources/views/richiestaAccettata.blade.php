@extends('welcome')

@section('title', 'Richiesta accettata')
@section('content')
<link href="{{asset('css/insertAll.css')}}" rel="stylesheet" type="text/css"/>
<script src="{{asset('../resources/js/confirmDelete.js')}}"></script>

<h1 id="title">Richiesta Accettata
        </h1>
<div class="floatingForm">
    <h1><a href="{{route('alloggiLocatore')}}">Torna agli alloggi</a></h1>
</div>
@endsection