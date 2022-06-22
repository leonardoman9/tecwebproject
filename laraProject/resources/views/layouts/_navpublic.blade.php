<a href="{{route('Home')}}" class="logo"><span id="home">Home</span>Away</a>
        <div id="menu">
              <ul class="navbar">
                  <li><a href="{{asset('files/documentazione.pdf')}}">Documentazione </a></li>
                  @can('isLocatario')
                  
                   <li><a href="{{route('opzionamenti')}}">Richieste di Opzionamento</a></li>
                @endcan
                  
                @can('isLocatario')
                
                <li><a href="{{route('msgPage')}}">Messaggi</a></li>
                <li><a href="{{route('Catalogo')}}">Catalogo</a></li>
                @endcan
                
                @can('isLocatore')
                <li><a href="{{route('msgPage')}}">Messaggi</a></li>
                <li><a href="{{route('alloggiLocatore')}}">Gestione Annunci</a></li>
                @endcan
                
                @can('isAdmin')
                <li><a href="{{route('statsPage')}}">Statistiche</a></li>
                <li><a href="{{route('gestioneFaq')}}">Gestisci FAQ</a></li>
                @endcan
                <a href=""></a>
                <li><a href="{{route('FaqPage')}} ">FAQ</a></li>
                
               @auth    
                    <li><a href="{{ route('profilo') }}"  class="btn-accedi" title="Home User">Profilo</a></li>
                    <li><a href="" title="Esci dal sito" class="btn-accedi" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}"  method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endauth    
                @guest
                    <li><a href="{{route('Catalogo')}}">Catalogo</a></li>
                    <li><a href="{{ route('login') }}" class="btn-accedi" title="Accedi all'area riservata del sito">Accedi</a></li>  
                    <li><a href="{{ route('register') }}" class="btn-registrati" title="Accedi all'area riservata del sito">Registrati</a></li>  
                @endguest

                </ul>
        </div>