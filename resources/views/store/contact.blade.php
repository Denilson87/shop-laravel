<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Contacto | Meia Lua</title>

  <link rel="shortcut icon" href="{{asset('images/logo/favicon-32x32.png')}}" />
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}" />
  <link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}" />

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="{{asset('css/style2.css')}}" />

  <!-- JQuery and Validator Plugins -->


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  {{-- custom css --}}
  <style>
    @media only screen and (max-width: 767px) {
      #head_links {
        visibility: hidden;
      }

      .custom_search_top {
        text-align: center;
      }

      .header-ctn {
        width: 100%;
      }
    }
  </style>
 <style>
        .dropbtn {
            background-color: #1E1F29;
            color: white;
            padding: 16px;
            font-size: 15px;
            font-weight: 500;
            font-family: 'Montserrat', sans-serif;
            border: none;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        .dropdown-content a:hover {
            background-color:#85adee;
          
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
            background-color:#85adee;
            transition: 0.9s;
        }
        
        .dropdown:hover .dropbtn {
            background-color:#85adee;
            border-radius: 45%;
            transition: 0.9s;
            


       
        }
    </style>
</head>

<body>
  <!-- HEADER -->
  <header>
    <nav id="navigation">
      <!-- container -->
      <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav fixed-top ">
          <ul class="main-nav nav navbar-nav">

            <!-- <li><a href="{{route('user.home')}}"><i class="fa fa-home"></i></a></li> -->
            <li class="dropdown" style="margin-top:3px;">
            <button class="dropbtn">Quem somos <i class="fa fa-caret-down"></i> </a></button>
                            <div class="dropdown-content" style="border-radius: 17%;">
                                <a href="{{route('user.about-us')}}">Sobre Meia lua</a>
                                <a href="{{route('user.loyality-card')}}">Loyality cards</a>
                            </div>
                        </li>
                        <li><a href="{{route('user.search')}}"><i class="fa fa-spinner"></i> Produtos</a></li>
            <li><a href="{{route('user.Contact')}}"><i class="fa fa-map-marker"></i> Lojas</a></li>
           
            <li><a href="{{route('user.home')}}"style=""> <img src="{{asset('images/logo/logoupdate.png')}}"  alt="Meia Lua" style=" width:115px; margin-top:-15px; margin-left:135px; "></a></li>
                        <li><a href="{{route('user.cart')}}" style="margin-left:200px;"><i class="fa fa-shopping-cart"></i> Cart</a></li>
            @if(session()->has('user'))
            <li><a style="color:white"
                href="{{route('user.history')}}"><strong>{{session()->get('user')->full_name}}</strong></a></li>
            <li><a href="{{route('user.logout')}}" style="margin-left:px;"><i class="fa fa-user-o"></i> Logout</a></li>
            @else
            <li><a href="{{route('user.login')}}"><i class="fa fa-user-o"></i> Login</a></li>
            <li><a href="{{route('user.signup')}}"><i class="fa fa-user-o"></i> Registar-se</a></li>
            @endif


          </ul>
          <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
      </div>
      <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m20!1m8!1m3!1d7175.6467371059!2d32.61423714041669!3d-25.94102385218654!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d-25.941409699999998!2d32.621232299999996!4m3!3m2!1d-25.9433778!2d32.6214042!5e0!3m2!1spt-PT!2smz!4v1623312341164!5m2!1spt-PT!2smz"
      width="100%" height="450" style="" allowfullscreen="" loading="lazy"></iframe>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

      .flip-card {
        background-color: transparent;
        width: 300px;
        height: 300px;
        perspective: 1000px;

      }

      .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;


      }

      .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
      }

      .flip-card-front,
      .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
      }

      .flip-card-front {
        background-color: #bbb;
        color: black;
        box-shadow: 0 5px 20px 0 rgba(0,0,0,0.8);
      }

      .flip-card-back {
        background-color: #85adee;
        color: white;
        transform: rotateY(180deg);
        box-shadow: 0 5px 20px 0 rgba(0,0,0,0.8);
        
      }

      .tocall{
      text-align:center;      }

      .tocall2{
        margin-left:200px;
        width:50%;
      }


    </style><br><br>
<div class="section-title">
                        <center><h3 class="" > As nossas <strong>Lojas</strong></h3></center>
                        <center><h6 class="texto">Visite-nos !</h6></center>
                    </div>
                    <center><div class="inner-container" style="border-top:4px solid rgb(255, 191, 0);padding-top:20px; width: 6%;"></div></center>
                </div>
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-6 col-xs-6">
            <div class="">
              <div class="flip-card" style="width:500px;">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="{{asset('img/store1.jpg')}}" style="width:500px; height:300px;" alt="Avatar"
                      style="width:300px;height:300px;">
                  </div>
                  <div class="flip-card-back"> <br>
                    <p><strong>Novare Mall Center-Matola </strong></p>
                    <p>Se é apaixonado por fragrâncias suaves mas que marcam de forma única e
                      especial a sua presença, saiba que a Boutique Meia Lua do Novare Matola
                      tem o essêncial para satisfazer a sua preferência!🥰 Visite já a loja S031 no
                      Novare Shopping Center Matola Mall, EN4 parcela 10/1/A, Matola!</p>
                  </div>
                </div>
              </div>
              <br>
              <ul class="tocall">
                    <i class="fa fa-map-marker"></i> Novare Shopping Center Matola Mall</a><br>
                    <i class="fa fa-phone"></i> (+258) 84 333 6115 </a><br>
                    <i class="fa fa-envelope-o"></i> matola@meialua.co.mz</a><br>
                    <i class="fa fa-map-marker"></i>     Coordenadas geograficas: 25°54'27"S 32°25'52"E<br>
                  </ul>
            </div>
            </div>

           <div class="col-md-6 col-xs-6">
            <div class="">
              <div class="flip-card"style="width:500px;">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="{{asset('img/store1.jpg')}}" style="width:500px; height:300px;" alt="Avatar"
                      style="width:300px;height:300px;">
                  </div>
                  <div class="flip-card-back"> <br>
                    <p><strong>Baia Mall, Avenida Marginal-Maputo</strong></p>
                    <p>Se é apaixonado por fragrâncias suaves mas que marcam de forma única e
                      especial a sua presença, saiba que a Boutique Meia Lua do Baia Mall, Avenida Marginal
                      tem o essêncial para satisfazer a sua preferência!🥰 Visite já a loja Loja G87,Baia Mall,
                       Avenida Marginal, Maputo.</p>
                  </div>
                </div>
              </div><br>
              <ul class="tocall">
                    <li><i class="fa fa-map-marker"></i> Baia Mall, Avenida Marginal, Maputo </a><br>
                    <li><i class="fa fa-phone"></i>  (+258) 84 333 6113 </a><br>
                    <li><i class="fa fa-envelope-o"></i> baia@meialua.co.mz</a><br>
                    <i class="fa fa-map-marker"></i>     Coordenadas geograficas: 25°56'36"S 32°37'18"E<br>
                  </ul>
            </div>
          </div>

        <!-- /row -->
      </div>
      <!-- /container -->

    </div>
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-6 col-xs-6">
            <div class="">
              <div class="flip-card"style="width:500px;">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="{{asset('img/store1.jpg')}}" style="width:500px; height:300px;" alt="Avatar"
                      style="width:300px;height:300px;">
                  </div>

                  <div class="flip-card-back"> <br>
                    <p><strong>Shopping JAT VI, Rua dos Desportistas, Maputo</strong></p>
                    <p>Se é apaixonado por fragrâncias suaves mas que marcam de forma única e
                      especial a sua presença, saiba que a Boutique Meia Lua do Shopping JAT VI, Rua dos Desportistas
                      tem o essêncial para satisfazer a sua preferência!🥰 Visite já a loja 16, Shopping JAT VI, 
                      Rua dos Desportistas, Maputo</p>
                  </div>
                </div>
              </div>
              <br>
              <ul class="tocall">
                  <a href="#"><i class="fa fa-map-marker"></i> Shopping JAT VI, Rua dos Desportistas, Maputo </a><br>
                  <a href="#"><i class="fa fa-phone"></i> (+258) 84 333 6114 </a><br>
                  <a href="#"><i class="fa fa-envelope-o"></i> jat@meialua.co.mz</a><br>
                  <i class="fa fa-map-marker"></i>     Coordenadas geograficas: 25°58'33"S 32°34'54"E <br>
                  </ul>
            </div>
          </div>

          <div class="col-md-6 col-xs-6">
            <div class="">
              <div class="flip-card"style="width:500px;">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="{{asset('img/store1.jpg')}}" style="width:500px; height:300px;" alt="Avatar"
                      style="width:300px;height:300px;">
                  </div>

                  <div class="flip-card-back"> <br>
                  <p><strong>Centro Comercial Hotel Rovuma, Rua do Sa 144, Maputo</strong></p>
                    <p>Se é apaixonado por fragrâncias suaves mas que marcam de forma única e
                      especial a sua presença, saiba que a Boutique Meia Lua do Novare Matola
                      tem o essêncial para satisfazer a sua preferência!🥰 Visite já a loja 2, Centro Comercial Hotel Rovuma,
                       Rua do Sa 144, Maputo</p>
                  </div>
                </div>
              </div>
              <br>
              <ul class="tocall">
                  <a href="#"><i class="fa fa-map-marker"></i>  Centro Comercial Hotel Rovuma, Rua do Sa 144 </a><br>
                  <a href="#"><i class="fa fa-phone"></i> (+258) 84 333 6112 </a><br>
                  <a href="#"><i class="fa fa-envelope-o"></i> rovuma@meialua.co.mz</a><br>
                  <i class="fa fa-map-marker"></i>     Coordenadas geograficas: 25°58'08"S 32°34'30"E <br>
                  </ul>
            </div>
          </div>

            </div>
          </div>

          <div class="clearfix visible-xs"></div>

        </div>
        <!-- /row -->
      </div>
      <!-- /container -->

    </div>
    <!-- /top footer --> 
    <!-- FOOTER -->
    <footer id="footer">
            <!-- top footer -->
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title" style="">Lojas</h2>
                                    <p style=""></p>
                                    <ul class="footer-links">
                                        <li><a href="{{route('user.Contact')}}"><i class="fa fa-map-marker"></i>Rovuma | (+258) 84 333 6112 </a></li>
                                        <li><a href="{{route('user.Contact')}}"><i class="fa fa-map-marker"></i>Novare Mall | (+258) 84 333 6115  </a></li>
                                        <li><a href="{{route('user.Contact')}}"><i class="fa fa-map-marker"></i>Baia Mall | (+258) 84 333 6113</a></li>
                                        <li><a href="{{route('user.Contact')}}"><i class="fa fa-map-marker"></i>Edificio JAT 6 | (+258) 84 333 6113</a></li>                                        
                                        <li><a href="{{route('user.Contact')}}"><i class="fa fa-envelope-o"></i>meialua@meialua.co.mz</a></li><br>
                                        <img src="{{asset('images/logo/logoupdate.png')}}" style=" opacity: 0.2; width:170px; margin-left:px;" alt="Meia Lua">
                                    </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Categorias</h3>
                                <ul class="footer-links">
                                    <li><a href="{{route('user.search')}}">Homens</a></li>
                                    <li><a href="{{route('user.search')}}">Mulheres</a></li>
                                    <li><a href="{{route('user.search')}}">Crianças</a></li>
                                    <li><a href="{{route('user.search')}}">Óculos</a></li>
                                    <li><a href="{{route('user.search')}}">Cremes</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="clearfix visible-xs"></div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Informação</h3>
                                <ul class="footer-links">
                                    <li><a href="{{route('user.about-us')}}"><i class="fa fa-list"></i>Sobre Nós</a></li>
                                    <li><a href="{{route('user.Contact')}}"><i class="fa fa-phone"></i>Contacte nos</a></li>
                                    <li><a href="#"><i class="fa fa-book"></i> Termos & condições</a></li>
                                    <li><a href="{{route('user.Contact')}}"><i class="fa fa-map-marker"></i>Nossas Lojas  </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Serviços</h3>
                                <ul class="footer-links">
                                    <li><a href="{{route('user.history')}}"><i class="fa fa-user"></i>Minha conta</a></li>
                                    <li><a href="{{route('user.cart')}}"><i class="fa fa-cart-plus"></i>Meu carrinho </a></li>
                                    <li><a href="{{route('user.history')}}"><i class="fa fa-heart"></i>Lista de desejos</a></li>
                                    <li>
                                        <a href="#"></a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->

            </div>
            <!-- /top footer -->

            <!-- bottom footer -->
            <div id="bottom-footer" class="section">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="footer-payments">
                                BOUTIQUE MEIA LUA © 2021. TODOS DIREITOS RESERVADOS.

                            </ul>

                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /bottom footer -->
        </footer>
        <!-- /FOOTER -->


    <!-- jQuery Plugins -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/nouislider.min.js')}}"></script>
    <script src="{{asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/lib/jquery.js')}}"></script>
    <script src="{{asset('js/dist/jquery.validate.js')}}"></script>



</body>

</html>
