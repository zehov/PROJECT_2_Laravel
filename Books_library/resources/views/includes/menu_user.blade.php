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
			 		 @if(Auth::check())
                     @if(Auth::user()->role == 'user')
                          <ul class="navigation">
                                <li><a href="{{route('users')}}" class="selected menu_01">Начало</a></li>
                                <li><a href="#aboutus" class="menu_02">За нас</a></li>
                                <li><a href="{{route('user.show',1)}}" class="menu_03">Автори</a></li>
                                <li><a href="{{route('user.show',2)}}" class="menu_04">Книги</a></li>
                                 <li><a href="{{route('user.show',3)}}" class="menu_04">Мойте книги</a></li>
                                <li><a href="#contactus" class="menu_05">Контакти</a></li>
                           </ul>

                     @endif
             
             @else
             <!--  when is guest -->
                    <ul class="navigation">
                        <li><a href="{{route('home')}}" class="selected menu_01">OБРАТНО</a></li>
                        
                    </ul>
             @endif      

          	<!-- <ul class="navigation">
			                    <li><a href="{{route('users')}}" class="selected menu_01">Начало</a></li>
                          <li><a href="#aboutus" class="menu_02">За нас</a></li>
                          <li><a href="{{route('user.show',1)}}" class="menu_03">Автори</a></li>
                          <li><a href="{{route('user.show',2)}}" class="menu_04">Книги</a></li>
                           <li><a href="{{route('user.show',3)}}" class="menu_04">Мойте книги</a></li>
                          <li><a href="#contactus" class="menu_05">Контакти</a></li>
			           </ul> -->
			         </div>

         	</div>
         </div>