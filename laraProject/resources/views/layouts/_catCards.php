@section('content')
          @include('_ultimiAnnunci')
    @isset($latestAnn)
          @foreach($latestAnn as $ann)
                    <?php $stampa = false; ?>
                        <section class="banner">
                            <div class="banner_image">
                                <a href="{{route('LoginPage')}}">
                        @include('helpers/annImg')
                                </a>
                            </div>
                         <div class="banner_copy">
                             <div class="banner_copy_text">
                                 @switch($ann->tipologia)
                                 @case(0) <h3> <u> {{$ann->citta}} -  POSTO LETTO in {{$ann->indirizzo}}</u></h3> @break
                                 @case(1) <h3> <u>{{$ann->citta}} -  APPARTAMENTO in {{$ann->indirizzo}}</u></h3> @break
                                 @endswitch
                               <p>
                                   {{$ann->descrizione}}
                               </p>
                               <div class="prezzo">
                                    <h4> 1 locale | </h4>
                                    <h4> {{$ann->numero_posto_letto_totale}} posti letto | </h4>
                                    <h4> {{$ann->dimensione}}Mq | </h4>
                                    <h4> Prezzo: {{$ann->canone}}€/Mese </h4>

                                 <a href="{{route('LoginPage')}}" class="button">Vedi l'annuncio</a>
                                </div>
                         </div>
                     </div>
                      </section>
          @endforeach
   
    @endisset()

          @include('_cards')
    @endsection