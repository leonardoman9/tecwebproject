    <section class="banner">
                            <div class="banner_image">
                            </div>
                         <div class="banner_copy">
                             <div class="banner_copy_text">
                                
                               <p>
                                   {{$ann->descrizione}}
                               </p>
                               <div class="prezzo">
                                    <h4> 1 locale | </h4>
                                    <h4> {{$ann->numero_posto_letto_totale}} posti letto | </h4>
                                    <h4> {{$ann->dimensione}}Mq | </h4>
                                    <h4> Prezzo: {{$ann->canone}}€/Mese </h4>
                                @guest
                                 <a href="{{route('login')}}" class="button">Vedi l'annuncio</a>
                                 @endguest
                                 @auth
                                 <a href="{{route('Ann', $ann->id_alloggio)}}" class="button">Vedi l'annuncio</a>
                                 @endauth
                                </div>
                         </div>
                     </div>
 </section>