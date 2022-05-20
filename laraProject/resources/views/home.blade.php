@extends('welcome')
@section('title', 'Homepage')
    @section('content')
          @include('layouts/_ultimiAnnunci')
          @include('layouts/_publicCatalog')
          @include('layouts/_cards')
    @endsection
    

     
    
