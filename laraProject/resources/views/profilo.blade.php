@extends('welcome')

<!-- Titolo da appendere alla rotta -->
@section('title', 'Profilo')

@section('specific')
<!-- Stili relativi ai dettagli di un evento -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/profilo.css') }}" >
@endsection

@section('content')

<div id="Mod_Container">
    <a href="{{route('mostra_modifica_profilo')}}">
        <button><i class="fa fa-pencil" aria-hidden="true"></i> Modifica profilo </button>
    </a>
</div>

<div class="Title">
    <p><i class="fa fa-user"></i>&nbsp;Profilo</p>
</div>


@endsection