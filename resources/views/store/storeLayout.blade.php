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

    <title>Divice-shop-Mz</title>

    <link rel="shortcut icon" href="{{asset('images/logo/favicon.png')}}" style="width:50px;"/>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href="https://codepen.io/michalsnik/pen/WxNdvq" rel="stylesheet">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
   
    <!-- JQuery and Validator Plugins -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

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
            background-color: #ffff;
            color: black;
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
            background-color:#000000;
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
            
          
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
            background-color:#2343;
            transition: 0.9s;
        }
        
        .dropdown:hover .dropbtn {
     
            border-radius: 4%;
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
                <div id="responsive-nav">
                    <img src="{{asset('images/logo/logo.png')}}" alt="Meia Lua" style=" width:160px; margin-left:-1300px;margin-top:5px">
                    <ul class="main-nav nav navbar-nav">
                        <li><a href="{{route('user.home')}}"><i class="fa fa-"><strong></strong></i></a></li>
                     
                        <!-- <li ><a href="{{route('user.about-us')}}"><i class="fa fa-align-justify"></i> Quem somos?</a></li>   -->
                        <li class="dropdown" style="margin-top:3px;">
                            <button class="dropbtn"><strong>Quem somos</strong>  <i class="fa fa-caret-down"></i></a></button>
                            <div class="dropdown-content" style="border-radius: 17%;">
                                <a href="{{route('user.about-us')}}">Quem somos </a>
                                <a href="{{route('user.loyality-card')}}">Mais</a>
                            </div>
                        </li>
                        
                        <li><a href="{{route('user.products2')}}"><i class="fa fa-spinner"></i> <strong>Productos</strong></a></li>
                        @if(Route::is('user.search')) @foreach($cat as $c)
                        
                        <li class="{{$c->id == $a ? 'active' : ''}}"><a href="{{route('user.search.cat',['id'=>$c->id])}}">{{$c->name}}</a></li>
                        
                        @endforeach
                        <li class="{{$a == -1  ? 'active' : ''}}" style=""><a href="search"><i class="fa fa-"></i><strong>Ver todos<strong></a></li>
                        <li><a href="{{route('user.home')}}"><i class="fa fa-home"style="margin-top:2px;"></i></a></li>
                        
                        @else @foreach($cat as $c)

                        <!-- <li ><a href="{{route('user.search.cat',['id'=>$c->id])}}">{{$c->name}}</a>ver todos</li> -->
                        @endforeach
                        <li><a href="{{route('user.Contact')}}"><i class="fa fa-user-o"></i> <strong>Parceiros</strong></a></li>
                       <li><a href="{{route('user.Contact')}}"><i class="fa fa-phone"></i> <strong> Contacte-nos</strong></a></li>
                       
                        <!-- style="height: 80px; width: 175px; border-radius: 48%;" -->
                        @endif @if(session()->has('user'))
                        <li><a style="color:Black; margin-left:320px;" href="{{route('user.history')}}"><strong>{{session()->get('user')->full_name}}</strong></a></li>
                        <li><a href="{{route('user.logout')}}" style="margin-left:20px;"><i class="fa fa-user-o"></i> <strong>Logout</strong></a></li>
                        <li><a href="{{route('user.cart')}}" style="margin-left:-10px;"><i class="fa fa-shopping-cart"> <strong>Cart</strong></i> </a></li>
                        @else
                        
                        <li><a href="{{route('user.login')}}"style="margin-left:340px;"><i class="fa fa-user-o"></i> <strong>Login</strong></a></li>
                        <li><a href="{{route('user.signup')}}"><i class="fa fa-user-o"></i> <strong>Registar-se</strong></a></li>
                        <li><a href="{{route('user.cart')}}" style="margin-left:15px;"><i class="fa fa-shopping-cart"> <strong>Cart</strong></i> </a></li>

                        @endif

                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
        <!-- /NAVIGATION -->
        @yield('content')
        <div id="newsletter" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsletter" style="margin-top:-100px;">
                            <p>Registe-se ao <strong>Newsletter</strong> </p>
                            <form>
                                <input class="input" type="email" placeholder="Digite seu Email">
                                <button class="newsletter-btn"><i class="fa fa-envelope"></i> Registar</button>
                            </form>
                            <ul class="newsletter-follow">

                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /NEWSLETTER -->
        <!-- SECTION -->



        <!-- SECTION -->
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
                                <h3 class="footer-title" style=""><strong>Sobre</strong></h2>
                                    <p style=""></p>
                                    <ul class="footer-links">
                                        <li><a href="{{route('user.Contact')}}"><i class="fa fa-map-marker"></i>Rovuma | (+258) 84 333 6112 </a></li>
                                        <li><a href="{{route('user.Contact')}}"><i class="fa fa-map-marker"></i>Novare Mall | (+258) 84 333 6115  </a></li>
                                        <li><a href="{{route('user.Contact')}}"><i class="fa fa-map-marker"></i>Baia Mall | (+258) 84 333 6113</a></li>
                                        <li><a href="{{route('user.Contact')}}"><i class="fa fa-map-marker"></i>Edificio JAT 6 | (+258) 84 333 6113</a></li>                                        
                                        <li><a href="{{route('user.Contact')}}"><i class="fa fa-envelope-o"></i>meialua@meialua.co.mz</a></li><br>
                                    </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title"><strong>Categorias</strong></h3>
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
                                <h3 class="footer-title"><strong>Informação</strong></h3>
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
                                <h3 class="footer-title"><strong>Serviços</strong></h3>
                                <ul class="footer-links">
                                    <li><a href="{{route('user.history')}}"><i class="fa fa-user"></i>Minha conta</a></li>
                                    <li><a href="{{route('user.cart')}}"><i class="fa fa-cart-plus"></i>Meu carrinho </a></li>
                                    <li><a href="{{route('user.history')}}"><i class="fa fa-heart"></i>Lista de desejos</a></li>                                   

                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- /row -->
                </div>
             

            </div>
          
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
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        

</body>

</html>
