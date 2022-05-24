<a href="{{route('Home')}}" class="logo"><span>Home</span>Away</a>
        <div id="menu">
              <ul class="navbar">

                <li><a href="{{route('Catalogo')}}">Catalogo</a></li>
                <li><a href="{{route('RegolamentoPage')}}">Regolamento e Condizioni d'uso</a></li>
                <li><a href="{{route('FaqPage')}} ">FAQ</a></li>

               @can('isUser')
        <li><a href="{{ route('user') }}" class="highlight" title="Home User">Home User</a></li>
               @endcan
    @auth
        <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
    @guest
        <li><a href="{{ route('login') }}" class="highlight" title="Accedi all'area riservata del sito">Accedi</a></li>  
        <li><a href="{{ route('register') }}" class="highlight" title="Accedi all'area riservata del sito">registrati</a></li>  
        @endguest

                </ul>
        </div>