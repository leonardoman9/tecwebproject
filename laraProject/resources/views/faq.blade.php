@extends('welcome')
@section('title', 'FAQ')
@section('content')
<br><br>
    @isset($allFaqs)
        @foreach ($allFaqs as $faq)
                
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
                <h1>{{$faq->domanda}} </h1>
            </div>
            <div class="flip-card-back">
                <h3> {{$faq->risposta}} </h3>
            </div>
          </div>
        </div>
        @endforeach
    @endisset()
    <br><br>
@endsection
