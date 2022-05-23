<a href="{{route('Home')}}" class="logo"><span>Home</span>Away</a>
        <div id="menu">
              <ul class="navbar">

                <li><a href="{{route('Catalogo')}}">Catalogo</a></li>
                <li><a href="{{route('RegolamentoPage')}}">Regolamento e Condizioni d'uso</a></li>
                <li><a href="{{route('FaqPage')}} ">FAQ</a></li>
                @if(!auth::check())
                <li> <a href="{{route('login')}}" class="btn-accedi ">Accedi</a> </li>
                <li> <a href="{{route('register')}}" class="btn-registrati ">Registrati</a> </li>
                @else
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
            
            <button type="submit" ><i class="fa fa-sign-out fa-lg"></i>Logout</button>
        </form>
        </div>
        @endif
                </ul>
        </div>