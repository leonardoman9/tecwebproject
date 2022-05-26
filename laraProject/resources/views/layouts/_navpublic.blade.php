<a href="{{route('Home')}}" class="logo"><span>Home</span>Away</a>
        <div id="menu">
              <ul class="navbar">
                  
                @can('isLocatario')
                
                <li><a href="{{route('msgPage')}}">Messaggi</a></li>
                <li><a href="{{route('Catalogo')}}">Catalogo</a></li>
                @endcan
                
                @can('isLocatore')
                <li><a href="{{route('msgPage')}}">Messaggi</a></li>
                <li><a href="">Gestione Annunci</a></li>
                @endcan
                
                @can('isAdmin')
                <li><a href="{{route('statsPage')}}">Statistiche</a></li>
                <li><a href="{{route('gestioneFaq')}}">Gestisci FAQ</a></li>
                @endcan
                
                <li><a href="{{route('FaqPage')}} ">FAQ</a></li>

               @auth
                    <li><a href="{{ route('user') }}" class="btn-accedi" title="Home User">Home User</a></li>
                    <li><a href="" title="Esci dal sito" class="btn-accedi" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                 @endauth    
    @guest
        <li><a href="{{ route('login') }}" class="btn-accedi" title="Accedi all'area riservata del sito">Accedi</a></li>  
        <li><a href="{{ route('register') }}" class="btn-registrati" title="Accedi all'area riservata del sito">Registrati</a></li>  
        @endguest

                </ul>
        </div>