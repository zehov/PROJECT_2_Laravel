 		<div id="menu">
            <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged as
                     @if(Auth::guest())
                Guest
              
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                @else
                {{Auth::user()->name}}
             <h3>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Изход</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    </a>
              </h3>
                @endif	
					<div>
			 			<ul class="navigation">
			                    <li><a href="{{route('home')}}" class="selected menu_01">Начало</a></li>
			                    <li><a href="#aboutus" class="menu_02">За Нас</a></li>
			                    <li><a href="{{route('authors.index')}}" class="menu_03">Aвтори</a></li>
			                    <li><a href="{{route('book.index')}}" class="menu_04">Книги</a></li>
			                    <li><a href="#contactus" class="menu_05">Контакти</a></li>
			           </ul>
			         </div>

         	</div>
         </div>