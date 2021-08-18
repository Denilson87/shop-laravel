@extends('store.storeLayout') @section('content')

 <div id="myCarousel" class="carousel slide" data-ride="carousel  wp5 delay-03s" > 
    
     <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>  
      
     </ol> 

     <div class="carousel-inner">
     <div class="item active">
       <img src="https://www.climba.com.br/blog/wp-content/uploads/2017/12/152364-entendendo-a-importancia-de-uma-plataforma-de-ecommerce.jpg" alt="perfumes" style="width:100%; height:650px;">
       <div class="carousel-caption" >
       <div class="row inner-content" style="text-align: justify; margin-top:-350px; ">  
       <div class="card" style=" background-color: white; margin-top:-80px; margin-left: -150px; width:580px; height:150px; opacity: ">        
        <div class="container">
        <h2 class="banner-text" style=" opacity: ; margin-left:40px;">Melhores prices e <strong>TOP</strong></h2>
        <h6 class="meia" >CONFIRA OS BEST SELLERS</h6>
  
    </div>
</div>
       </div>      
      </div>
      </div>
 <div class="item">
        <img src="https://www.vinculumgroup.com/wp-content/uploads/2020/08/eCommerce-enabler.jpg" alt="perfumes" style="width:100%; height:650px;">
        <div class="carousel-caption" >
       <div class="row inner-content" style="text-align: justify; margin-top:-350px; ">  
       <h2 class="banner-text" >Shopping online</h2>
       <h6 class="meia" >CONFIRA OS BEST SELLERS</h6>
       </div>      
       </div> 
       </div>
 <div class="item">
        <img src="https://eficazmarketing.com/wp-content/uploads/2020/08/Tend%C3%AAncias-e-inova%C3%A7%C3%B5es-do-ecommerce-cen%C3%A1rio-p%C3%B3s-pandemia-no-Brasil.png" alt="perfumes" style="width:100%; height:650px;">
        <div class="carousel-caption" >
       <div class="row inner-content" style="text-align: justify; margin-top:-350px; "> 
       <div class="card" style=" background-color: white; margin-top:-80px; margin-left: -150px; width:580px; height:150px; opacity: ">        
        <div class="container">
        <h2 class="banner-text" style=" opacity: ; margin-left:40px;">Dispositivos<strong>TOP</strong></h2>
    <h6 class="meia" >A SUA PRIMEIRA ESCOLHA DAS MELHORES MARCAS</h6>  
  </div>
</div>  
<h2 class="banner-texte" >Hug your products</h2>
       <h6 class="m eiae" >A SUA PRIMEIRA ESCOLHA DAS MELHORES MARCAS</h6>
 </div>      
       </div> 
       </div>
    </div>
<!-- Left and right controls -->
 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> 
<style>
    .title {
        font-family: 'Open Sans', sans-serif, Helvetica, Arial, sans-serif;
    }
    
    .titleE {
        font-family: 'Open Sans', sans-serif, Helvetica, Arial, sans-serif;
    }
    
    .texto {
        font-family: Courier, monospace;
    }
    
    .card-title {
        font-family: 'Open Sans', sans-serif, Helvetica, Arial, sans-serif;
    }
    
    .banner-text {
        font-family: Verdana, sans-serif;
        color: black;
        margin-left: 215px;
        font-size: 60px;
        /* background-color:gold;
  height: 40px;
  width:10; */
    }
    
    .banner-texte {
        font-family: Verdana, sans-serif;
        color: white;
        margin-left: 280px;
        font-size: 60px;
        /* background-color:gold;
  height: 40px;
  width:10; */
    }
    
    .meia {
        font-family: Verdana, sans-serif;
        color: black;
        margin-left: 60px;
    }
    
    .meiae {
        font-family: Verdana, sans-serif;
        color: white;
        margin-left: 230px;
    }
</style>

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <center>
                        <h3 class="title">Confira os best sellers </h3>
                    </center>
                    <center>
                        <h6 class="texto">Tenha a conhecer algumas das nossas melhores marcas </h6>
                    </center>
                </div>
                <div class="inner-container" style="border-top:4px solid rgba(125, 219, 236, 0.9);;padding-top:20px; margin-left: 510px; width: 10%;"></div>

            </div>

            <div class="col-md-12">
                <div class="row">
                    @foreach($products as $product)
                    <!-- product -->
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-img">
                                <img src="uploads/products/{{$product->id}}/{{$product->image_name}}" style="height: 267px;border-radius: 10%;" alt="">
                                <div class="product-label">
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category">{{$product->category->name}}</p>
                                <h3 class="product-name"><a href="{{route('user.view',['id'=>$product->id])}}">{{$product->name}}</a>
                                </h3>
                                <h8 class=""> {{$product->discount}},00 MT <del class="product-old-price"></del></h8><br>
                                <h class=""><b>New arrivals</b><del class="product-old-price"></del></h>
                                <h class=""><del class="product-old-price"></del></h>
                                <div class="product-rating">
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a class="add-to-cart-btn" href="{{route('user.view',['id'=>$product->id])}}"><i
                    class="fa fa-shopping-cart"></i>Comprar</a>
                            </div>
                        
                        </div>
                    </div>
                    <!-- /product -->
                    @endforeach
                  
                </div>
                {!! $products->links() !!}

</section>
            </div>

            <style>
                @import url('https://fonts.googleapis.com/css?family=Oswald');
                .oswald {
                    font-family: sans-serif;
                }
                
                h4 {
                    font-size: 2em;
                }
                
                p {
                    font-size: 1.3em;
                    line-height: 1.1em;
                }
                
                .card {
                    width: 100%;
                    height: 300px;
                    color: #D6D600;
                }
                
                .card-img {
                    width: 100%;
                    height: 100%;
                    background-color: black;
                    /* fallback color */
                    background-position: center;
                    background-size: cover;
                    transition: all 0.3s ease-in-out;
                    opacity: 1;
                }
                
                .card:hover .card-img,
                .card:focus .card-img {
                    transform: scale(1.1);
                    opacity: 0.9;
                }
                
                .card:hover .card-img-overlay {
                    color: #000;
                }
                
                .card-img-overlay>h4,
                .card-img-overlay>p {
                    visibility: hidden;
                }
                
                .card-img-overlay:hover h4,
                .card-img-overlay:hover p {
                    visibility: visible;
                }
                
                .card:hover .card-img-overlay p {
                    font-size: 1.0em;
                    letter-spacing: 0.07em;
                    font font-family: sans-serif;
                }
    
            </style>



        </div>
    </div>

</div>
</div>
</head>

<body>
  
      
    
    @endsection