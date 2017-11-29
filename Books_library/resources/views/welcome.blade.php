<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library_book</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/tooplate_style_guest.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/coda-slider_guest.css" type="text/css" charset="utf-8" />

 @if(Auth::check())
    @else                
        <script src="js/jquery-1.2.6.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
        <script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
        <style type="text/css">
        body {
        background-image:url("images/library.jpg");
        }
        </style>   
  @endif      
</head>
<body>
    
<div id="slider">
    <div id="tooplate_wrapper">
        <div id="tooplate_sidebar">
                  <div id="header">
                                <h1><a href="#"><img src="images/tooplate_logo.png" title="Notebook Template - tooplate.com" alt="Notebook free html template" /></a></h1>
                  </div>    
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
             </div>
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
                          @else
                          <ul class="navigation">
                                <li><a href="{{route('home')}}" class="selected menu_01">Начало</a></li>
                                <li><a href="#aboutus" class="menu_02">За Нас</a></li>
                                <li><a href="{{route('authors.index')}}" class="menu_03">Aвтори</a></li>
                                <li><a href="{{route('book.index')}}" class="menu_04">Книги</a></li>
                                <li><a href="#contactus" class="menu_05">Контакти</a></li>
                          </ul>


                     @endif
             
             @else
                    <ul class="navigation">
                        <li><a href="#home" class="selected menu_01">Начало</a></li>
                        <li><a href="#aboutus" class="menu_02">За Нас</a></li>
                        <li><a href="#authors" class="menu_03">Aвтори</a></li>
                        <li><a href="#books" class="menu_04">Книги</a></li>
                        <li><a href="#contactus" class="menu_05">Контакти</a></li>
                    </ul>
             @endif      
              
            </div>
      </div> <!-- end of sidebar -->  
        <div id="content">
          <div class="scroll">
            <div class="scrollContainer">
                  <div class="panel" id="home">
                    <div class="content_section">
                      <h2>Добре дошли в Библиотеката</h2>
                      <img src="images/books3.jpg" alt="Image 01" class="image_wrapper image_fl" />
                      <p><em>Nullam at erat ipsum, quis tincidunt mauris. Nunc sit amet sapien eget eros iaculis hendrerit quis a enim. Vestibulum at leo ante, vel auctor velit.</em></p>
                      <p>Notebook is designed by Danail Zehov</p>
                    </div>
                    <div class="content_section last_section">
                      <h2>БИБЛИОТЕКА</h2>
                    </div>
                  </div> <!-- end of home -->
              
              <div class="panel" id="aboutus">
                <div class="content_section">
                  <h1>За Нас</h1>
                  <img src="images/books2.jpg" alt="Image 02" class="image_wrapper image_fl" />
                  <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in lectus turpis. Vivamus cursus tortor quis leo ullamcorper auctor quis tincidunt metus.</em></p>
                  <p>Vestibulum vitae lectus a leo commodo egestas. Sed et ligula mauris. Donec interdum iaculis eros, sed porttitor justo ornare ac. Suspendisse ultrices arcu auctor <a href="#">sapien malesuada</a> dictum. Vivamus non ante sit amet ligula dignissim blandit ut sit amet purus. Sed tristique euismod lectus sed scelerisque. Curabitur convallis fringilla ante, eget eleifend magna iaculis eget. Praesent at nunc tellus. Sed sed auctor odio. Maecenas ut <a href="#">mauris eu ligula</a> placerat tempor vel ac augue. Integer fermentum, ante eget sodales lacinia, nisl diam semper elit, non hendrerit nunc urna vitae erat. Fusce ac ante vulputate nunc cursus ullamcorper.

                  <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in lectus turpis. Vivamus cursus tortor quis leo ullamcorper auctor quis tincidunt metus.</em></p>
                  <p>Vestibulum vitae lectus a leo commodo egestas. Sed et ligula mauris. Donec interdum iaculis eros, sed porttitor justo ornare ac. Suspendisse ultrices arcu auctor <a href="#">sapien malesuada</a> dictum. Vivamus non ante sit amet ligula dignissim blandit ut sit amet purus. Sed tristique euismod lectus sed scelerisque. Curabitur convallis fringilla ante, eget eleifend magna iaculis eget. Praesent at nunc tellus. Sed sed auctor odio. Maecenas ut <a href="#">mauris eu ligula</a> placerat tempor vel ac augue. Integer fermentum, ante eget sodales lacinia, nisl diam semper elit, non hendrerit nunc urna vitae erat. Fusce ac ante vulputate nunc cursus ullamcorper.
                </div>
                
                <div class="content_section last_section">
                  <h2>Testimonial</h2>
                  <blockquote>
                    <p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula, quis viverra tellus nulla a odio. Curabitur vitae enim risus, at placerat turpis. Mauris feugiat suscipit tempus fringilla, felis in velit. Aliquam a leo nec massa pharetra pulvinar.</p>
                    <cite>Thomas - <span>Designer</span></cite> </blockquote>
                </div>
              </div> <!-- end of aboutus -->
              
              <div class="panel" id="services">
                <h1>АВТОРИ</h1>
                <table class="table table-hover">
            <thead>
              <tr>
                <th> Име</th>
                <th>Дата на раждане</th>
                <th> Държава</th>
                <th> Брой книги</th>
              </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
              <tr>
                <td>
                  <a href="{{route('show_author',$author->id)}}">
                      {{$author->author_name}}
                  </a>
                
                </td>
                <td>{{$author->born_date}}</td>
                <td>{{$author->country}}</td>
                <td>{{$author->books_count}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
              </div> <!-- end of authors -->
              
              <div class="panel" id="gallery">
                <h1>Книги</h1>
                <table >
                <thead>
                  <tr>
                    <th> N</th>
                    <th> Име на книгата</th>
                    <th>Станици</th>
                    <th>Автор</th>
                    <th>Описание</th>
                  </tr>
                </thead>
                <tbody>
                @php
                $n=1;
                @endphp
                  @foreach($books as $book)
                    <tr>
                      <td>{{$n}}</td>

                      <td>
                        <a href="{{route('book.show',$book->id)}}">
                            {{$book->book_name}}
                        </a>
                      
                      </td>
                      <td>{{$book->total_pages}}</td>
                      <td>{{$book->author->author_name}}</td>
                      <td>{{$book->book_info}}</td>
                      
                    </tr>
                    @php
                    $n=$n+1;
                    @endphp
                  @endforeach
                </tbody>
            </table>
              </div> <!-- end of books -->
              
              <div class="panel" id="contactus">
                <h1>Форма за контакт</h1>
                <p>Duis vel est eu velit eleifend volutpat non et purus. Pellentesque tellus nulla, suscipit et fringilla vitae, sodales ultricies dolor.</p>
                <div class="cleaner_h10"></div>
                
                <div class="col_380 float_l">
                  <div id="contact_form">
                    <form method="post" name="contact" action="#">
                      <label for="author">Име:</label>
                      <input type="text" maxlength="40" id="author" class="input_field" name="author" />
                      <div class="cleaner_h10"></div>
                      <label for="email">Email:</label>
                      <input type="text" maxlength="40" id="email" class="input_field" name="email" />
                      <div class="cleaner_h10"></div>
                      <label for="subject">Относно:</label>
                      <input type="text" maxlength="40" id="subject" class="input_field" name="subject" />
                      <div class="cleaner_h10"></div>
                      <label for="text">Собщение:</label>
                      <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                      <div class="cleaner_h10"></div>
                      <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                      <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                    </form>
                  </div>
                </div>
                <div class="col_380 float_r"> </div>
              </div>
          </div><!-- end of scroll -->
        </div>
    </div> <!-- end of content -->
</div>

<div id="footer">
    
    <div id="social_box">
        <a href="{{ route('authors.index') }}" ><img src="images/facebook.png" alt="facebook" /></a>
        <a href="#"><img src="images/flickr.png" alt="flickr" /></a>
        <a href="#"><img src="images/myspace.png" alt="myspace" /></a>
        <a href="#"><img src="images/twitter.png" alt="twitter" /></a>
        <a href="#"><img src="images/youtube.png" alt="youtube" /></a>
    </div>
    
    <div id="footer_left">
        
        Copyright © 2017 <a href="#">DANY ZEHOV</a><br />
        Designed by <a href="#">Vratsa Software </a><br />
       
    </div>
    
    <div class="cleaner"></div>
</div>
</body>
</html>