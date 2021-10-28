@extends('store.storeLayout') @section('content')
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
<nav aria-label="breadcrumb fixed-nav-bar">
    <ol class="breadcrumb">
        <div class="dropdown1">
            <button class="dropbtn1"><strong>Filtrar por Categorias</strong> <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
            @foreach($cat as $c)
                <!-- <a href="#">Mont Blanc</a> -->
                <a href="{{route('user.search.cat',['id'=>$c->id])}}">{{$c->name}}</a></li>
                 @endforeach
                
            </div>
        </div>

        <div class="dropdown1">
            <button class="dropbtn1"><strong>loção</strong> <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Homens</a>
                <a href="#">Mulheres</a>             
            </div>
        </div>
        <div class="dropdown1">
            <button class="dropbtn1"><strong>Filtrar por Marcas</strong> <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
         
            </div>
        </div>
       <!-- SEARCH BAR -->
       <div class="col-md-6">
                        <div class="header-search"style="margin-top:-10px;">
                            <form action="{{route('user.search')}}" method="get">
                                <div class="custom_search_top" >
                                    <input class="input" style="border-radius: 40px 0px 0px 30px;" name="n" placeholder="Pesquisar por marca">
                                    <button  class="search-btn">Pesquisar</button>
                                </div>
                            </form>
                        </div>
                    </div>
      <!-- /SEARCH BAR -->
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
                                <h8 class="">MZN : {{$product->discount}} <del class="product-old-price"></del></h8><br>
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
    @endsection
</div>
