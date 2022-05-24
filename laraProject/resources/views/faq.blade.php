@extends('welcome')
@section('title', 'FAQ')
@section('content')
<br><br>
    @isset($allFaqs)
        <h1 style="margin: auto;
                    width: 50%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    margin-top: 30px;
                    margin-bottom: 30px;">Frequently Asked Questions 
        </h1>
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
