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

    <title>Loyality | Card </title>

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
        @media only screen and (max-width: 767px){
            #head_links {
                visibility: hidden;
            }
            .custom_search_top {
                text-align:center;
            }

            .header-ctn {
                width: 100%;
            }
        }
        </style>

        
        <!-- Style for dropdown -->
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
                
                <li ><a href="{{route('user.home')}}"><i class="fa fa-"></i> </a></li>
                <li class="dropdown" style="margin-top:3px;">
                <button class="dropbtn">Quem somos <i class="fa fa-caret-down"></i> </a></button>
                            <div class="dropdown-content" style="border-radius: 17%;">
                                <a href="{{route('user.about-us')}}">Sobre Meia lua</a>
                                <a href="{{route('user.loyality-card')}}">Loyality cards</a>
                            </div>
                        </li>
                        <li ><a href="{{route('user.search')}}"><i class="fa fa-spinner"></i> Produtos</a></li>                    
                    <li><a href="{{route('user.Contact')}}"><i class="fa fa-map-marker"></i> Lojas</a></li>
                   
                        
                        <li><a href="{{route('user.home')}}"style=""> <img src="{{asset('images/logo/logoupdate.png')}}" alt="Meia Lua" style=" width:115px; margin-top:-15px; margin-left:135px; "></a></li>
                        <li><a href="{{route('user.cart')}}" style="margin-left:200px;"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                 
                    @if(session()->has('user'))
                      <li><a style="color:black" href="{{route('user.history')}}"><strong>{{session()->get('user')->full_name}}</strong></a></li>  
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
    
    </header>
    
        <!-- /TOP HEADER -->
        <div id="crossfade">
    <img class="bottom" src="https://2ndkitchen.com/wp-content/uploads/2021/04/20160418_Brands_LoyaltyPrograms.jpeg" style="height:600px; width:100%" />
    <img class="top" src="https://2ndkitchen.com/wp-content/uploads/2021/04/20160418_Brands_LoyaltyPrograms.jpeg" style="height:600px; width:100%"/>
</div><br><br><br><br>
<br><br> <br><br><br><br>
<br><br> <br><br><br><br>

<style>
#crossfade {
    position:relative;
    height:100px;
    width:100%;
}
#crossfade img {
    position:absolute;
    left:0;
    opacity: 10;
    -webkit-transition: opacity 1s ease-in-out;
    -moz-transition: opacity 1s ease-in-out;
    -o-transition: opacity 1s ease-in-out;
    -ms-transition: opacity 1s ease-in-out;    
    transition: opacity 1s ease-in-out;
}

#crossfade img.top:hover {
    opacity:0;
}
h3{

}
  </style>
    <!-- /SECTION -->
    
 
      <br><br><br><br>
<br><br> <br><br><br><br>

 <div class="container"> 
 <div class="col-md-12">
                    <div class="section-title">
                        <center><h3 class="" >Cartão de <strong>Fidelidade</strong></h3></center>  
                        <center><h6 class="texto">Ganhe o cartão com melhores beneficios  </h6></center>                      
                    </div>
                    <div class="inner-container" style="border-top:4px solid rgb(255, 191, 0);padding-top:20px; margin-left: 510px; width: 10%;"></div>
                    
                </div>
                <div class="row inner-content" style="text-align: justify;">                             
                <p>Cartão de Fidelização – Membro VIP Meia Lua, um meio que lhe permitirá ter acesso à descontos,   promoções exclusivas e outras vantagens, como brindes, quando efectuar suas compras em qualquer loja Meia Lua (Rovuma, Baia Mall, Matola Mall e JAT6).
                 Desde já, agradecemos a confiança depositada em nós, e convidamos-lhe a continuar a efectuar as suas compras connosco, esperando que esteja encantado com os nossos serviços e com a qualidade dos produtos que temos fornecido.</p>
                
                <p></P>
                </div> 
  
        <div class="container p-3">
    <div class="row">
    <div class="col-md-12">
         </div>
</div>
</div> 

<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/dist/jquery.validate.js')}}"></script>


<style>
label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}


</style><br>
    <!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

        <div class="billing-details">
                    <div class="section-title">
                        <h3 class="">Regista-se e obetenha o seu cartão <b>VIP</b></h3>
                    </div>
                       <form  method="post" id="card_form" action="{{route('user.loyality-card-post')}}" >  
                       <div class="col-md-6">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nome*</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Name" id="Name" placeholder="Nome completo" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Email*</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="Email" id="Email" placeholder="Digite o email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Telefone*</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="Phone" id="Phone" placeholder="Digite numero do telefone" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning mr-4">Registar</button>
                    </form>
                    
                </div>
                <!-- /Billing Details -->
            </div>

<!-- Side image card Meia lua -->
<div class="col-md-6">
                <!-- Billing Details -->
                                   
                   
                    <img class="bottom" src="{{asset('img/cardeee.png')}}" style="height:135px; width:40%; margin-top:-5px;" />
                    <img class="bottom" src="{{asset('img/card_(2).png')}}" style="height:135px; width:40%; margin-top:0px;" />
                    
                </div>
                <!-- /Billing Details -->
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>


<!--/JQUERY Validation-->


<!--Duplicate Email Validation-->
<script>
function myFunction() {
    //var token={{ csrf_token() }};
    var email=$("#Email").val();
    var token=$("input[name=_token]").val();
    var url="{{route('user.signup.check_email')}}";
    

            $.ajax({
                type:'post',
                url:url,
                dataType: "JSON",
                async: false,
                data:{email: email, _token: token},
                success:function(msg){                        
                         
                        if(msg == "1")
                            {
                                document.getElementById("for_duplicate-email").innerHTML = "<label class='error'>This Email Address is Already taken</label>";
                                                    

                            }
                    else
                        {
                                                document.getElementById("for_duplicate-email").innerHTML = "";

                        }
                    }
             });
    
}
</script>
<!--/Duplicate Email Validation-->

<!-- /SECTION -->
     <br><br><br>
    <!-- /NEWSLETTER -->

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
