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

    <title>Divice-mz | Online Shopping</title>

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
            background-color: #ddd;

        }

        .dropdown:hover .dropdown-content {
            display: block;
            background-color: #85adee;
            transition: 0.9s;
        }

        .dropdown:hover .dropbtn {
            background-color: #85adee;
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
                        <li class="dropdown" style="margin-top:3px;">
                            <button class="dropbtn">Quem somos <i class="fa fa-caret-down"></i> </a></button>
                            <div class="dropdown-content" style="border-radius: 17%;">
                                <a href="{{route('user.about-us')}}">Sobre Meia lua</a>
                                <a href="{{route('user.loyality-card')}}">Loyality cards</a>
                            </div>
                        </li>
                        <li><a href="{{route('user.Contact')}}"><i class="fa fa-map-marker"></i> Lojas</a></li>
                        @foreach($cat as $c)
                        
                        <li class="{{$c->id == $a ? 'active' : ''}}"><a href="{{route('user.search.cat',['id'=>$c->id])}}">{{$c->name}}</a></li>
                        
                        @endforeach
                        
                        <li class="{{$a == -1  ? 'active' : ''}}" style=""><a href="search"><i class="fa fa-"></i>ver todos</a></li>

                        <li><a href="/"><i class="fa fa-home"></i> </a></li>
                      
                        <li><a href="{{route('user.cart')}}" style="margin-left:100px;"><i
                                    class="fa fa-shopping-cart"></i> Cart </a></li>

                        @if(session()->has('user'))
                        <li><a style="color:black"
                                href="{{route('user.history')}}"><strong>{{session()->get('user')->full_name}}</strong></a>
                        </li>
                        <li><a href="{{route('user.logout')}}" style="margin-left:px;"><i class="fa fa-user-o"></i>
                                Logout</a></li>

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

    </header>

    <!-- /TOP HEADER -->
    <style>
    .breadcrumb {
        background-color: #85adee;
        box-shadow: 0px 8px 16px 0px rgba(0, 4, 4, 0.4);
       
  
    }
    /* .breadcrumb-item{
color:#85adee;
} */
    
    .dropbtn1 {
        background-color: #ffb30078;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        border-radius: 10%;
        
    }
    
    .dropdown1 {
        position: relative;
        display: inline-block;
        
    }
    
    .dropdown1-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.4);
        z-index: 1;
    }
    
    .dropdown1-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        
    }
    
    .dropdown1-content a:hover {
        background-color: #ddd;
    }
    
    .dropdown1:hover .dropdown-content {
        display: block;
        
        
    }
    
    .dropdown1:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>
<nav aria-label="breadcrumb fixed-nav-bar" >
    <ol class="breadcrumb">
        <div class="dropdown1">
            <button class="dropbtn1"><strong>Filtrar por Categorias</strong> <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
            @foreach($cat as $c)            
                <a href="{{route('user.search.cat',['id'=>$c->id])}}">{{$c->name}}</a></li>
                 @endforeach
                
            </div>
        </div>

        <div class="dropdown1">
            <button class="dropbtn1"><strong>Cremes</strong> <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Homens</a>
                <a href="#">Mulheres</a>             
            </div>
        </div>
        <div class="dropdown1">
            <button class="dropbtn1"><strong>Filtrar por Marcas</strong> <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
            @foreach($bra as $d)            
                <a href="{{route('user.products.bra',['id'=>$d->id])}}">{{$d->name}}</a></li>
                 @endforeach
                
            </div>
        </div>
      
    </ol>
</nav>

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- STORE -->
            <div id="store" class="col-md-12">
                <!-- store products -->
                <div class="row">
                    @foreach($products as $product)
                    <!-- product -->
                    <div class="col-md-3 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="uploads/products/{{$product->id}}/{{$product->image_name}}" style="height: 275px;" alt="">
                                <div class="product-label">
                                </div>
                            </div>
                            <div class="product-body">                                
                                <h3 class="product-name"><a href="product/{{$product->id}}">{{$product->name}}</a></h3>
                                <h8 class=""> {{$product->discount}} MT <del class="product-old-price"></del></h8><br>
                                <h class="">Disponivel na loja: Baia Mall <del class="product-old-price"></del></h>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>

                            </div>
                            <div class="add-to-cart">
                                <a class="add-to-cart-btn" href="{{route('user.view',['id'=>$product->id])}}"><i
                    class="fa fa-shopping-cart"></i>Add ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <!-- /product -->
                    @endforeach
                </div>
                
                <!-- /STORE -->
            </div>


            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    </div>
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