@extends('store.storeLayout') @section('content')
<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/dist/jquery.validate.js')}}"></script>
<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link type="text/css" rel="stylesheet" href="{{asset('css/style_for_quantity.css')}}" />

<style>
    label.error {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
        padding: 1px 20px 1px 20px;
    }
</style>

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 ">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="../uploads/products/{{$product->id}}/{{$product->image_name}}" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->


            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name"><strong>{{$product->name}}</strong></h2>
                    <div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="product-price">Preço: {{$product->discount}},00 MT <del class="product-old-price">MT
                                {{$product->price}}</del></h3>
                        <span class="product-available">Em stock</span>
                    </div>
                    <p>{!!$product->description!!}</p>
                    <form method="post" id="order_form">
                    {{csrf_field()}}
                              <div class="col-md-6 mb-6">
                    <label for="inputState"><strong>Selecione a cor</strong></label>                  
                  </div>                  
                </label><br>
                    <div class="product-options" >
                        <input type="hidden" id="discount_price_holder" name="discount_price_holder" value={{$product->discount}}>                       
                        <label>
                        @foreach($colors as $c)
                        <input type="radio" name="color"  value="{{$c}}">
                        <div style="height:30px;width:30px;display:inline-block;background-color: {{$c}}"></div>
                        @endforeach                   
                        <div id="field1">Quantidades
                        <button type="button" id="sub" class="sub">-</button>
                        <input type="number" id="quantity" name="quantity" value="1" min="1" max="100"  />
                        <button type="button" id="add" class="add">+</button>
                    </div>                        
                        </label> 
                        <ul class="product-links">
                        <li>Categoria:  Produtos /</li>
                        <li><a href="{{route('user.search')}}?c={{$product->category->id}}">{{$product->category->name}}</a></li>
                    </ul> 
                    </div>
                        <div id="for_error"></div>

                    <div class="add-to-cart">
                        <button type="submit" name="myButton" id="myButton" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> adicionar ao carrinho</button>
                    </div>
                    <div class="add-to-cart"style="margin-left:300px; margin-top:-70px;">
                            <button type="submit" name="Favorito" id="Favorito" class="add-to-cart-btn"><i
                                    class="fa fa-heart"></i>Favorito</button>
                        </div>
                    </form> 
                    <ul class="product-links">
                        <li><strong>Categoria:</strong></li>
                        <li><a href="{{route('user.search')}}?c={{$product->category->id}}">{{$product->category->name}}</a>
                        </li>
                    </ul>
                    <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
                </div>
            </div>
            <!-- /Product details -->
        </div>
        <!-- /row -->
    </div>
<br><br>

    <section id="solutions">
        <div class="container">
           
                <h2>Productos Relacionados</h2>
          
            
                <div class="inner-container" style="border-top:4px solid rgb(255, 191, 0);padding-top:20px; width: 6%;">
                </div>
           <br>
            <div class="container">
<div class="row">
   <div class="col-md-8">
      <div class="carousel carousel-showmanymoveone slide" id="carousel-tilenav" data-interval="false">
         <div class="carousel-inner">
            <div class="item active">
               <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="#"><img src="https://i.ebayimg.com/images/g/6fkAAOSwrhBZEzE0/s-l300.jpg" style="height:150px;" class="img-responsive"></a>
               </div>
            </div>
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="#"><img src="" style="height:150px;" class="img-responsive"></a>
               </div>
            </div>
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="#"><img src="https://fimgs.net/mdimg/perfume/375x500.55166.jpg" style="height:150px;" class="img-responsive"></a>
               </div>
            </div>
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="#"><img src="" style="height:150px;" class="img-responsive"></a>
               </div>
            </div>
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="#"><img src="https://fimgs.net/mdimg/perfume/375x500.55166.jpg" style="height:150px;" class="img-responsive"></a>
               </div>
            </div>
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="#"><img src="" style="height:150px;"class="img-responsive"></a>
               </div>
            </div>
            
         </div>
         <a class="left carousel-control" href="#carousel-tilenav" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
         <a class="right carousel-control" href="#carousel-tilenav" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
   </div>

  
</div>

   
</div>
<style>
.carousel-showmanymoveone .carousel-control {
   width: 4%;
   background-image: none;
}

.carousel-showmanymoveone .carousel-control.left {
   margin-left: 0;
}

.carousel-showmanymoveone .carousel-control.right {
   margin-right: 0;
}

.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3 {
   display: none;
}

.carousel .item .col-xs-12 {
   padding: 0;
}


/* Medium Devices, Desktops */

@media only screen and (max-width: 992px) {
   .carousel .item .col-xs-12:nth-last-child(-n+2) {
      display: none;
   }
}

@media all and (min-width: 768px) {
   .carousel-showmanymoveone .carousel-inner > .active.left,
   .carousel-showmanymoveone .carousel-inner > .prev {
      left: -50%;
   }
   .carousel-showmanymoveone .carousel-inner > .active.right,
   .carousel-showmanymoveone .carousel-inner > .next {
      left: 50%;
   }
   .carousel-showmanymoveone .carousel-inner > .left,
   .carousel-showmanymoveone .carousel-inner > .prev.right,
   .carousel-showmanymoveone .carousel-inner > .active {
      left: 0;
   }
   .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
      display: block;
   }
}

@media all and (min-width: 768px) and (transform-3d),
all and (min-width: 768px) and (-webkit-transform-3d) {
   .carousel-showmanymoveone .carousel-inner > .item.active.right,
   .carousel-showmanymoveone .carousel-inner > .item.next {
      -webkit-transform: translate3d(50%, 0, 0);
      transform: translate3d(50%, 0, 0);
      left: 0;
   }
   .carousel-showmanymoveone .carousel-inner > .item.active.left,
   .carousel-showmanymoveone .carousel-inner > .item.prev {
      -webkit-transform: translate3d(-50%, 0, 0);
      transform: translate3d(-50%, 0, 0);
      left: 0;
   }
   .carousel-showmanymoveone .carousel-inner > .item.left,
   .carousel-showmanymoveone .carousel-inner > .item.prev.right,
   .carousel-showmanymoveone .carousel-inner > .item.active {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
      left: 0;
   }
}

@media all and (min-width: 992px) {
   .carousel-showmanymoveone .carousel-inner > .active.left,
   .carousel-showmanymoveone .carousel-inner > .prev {
      left: -16.6%;
   }
   .carousel-showmanymoveone .carousel-inner > .active.right,
   .carousel-showmanymoveone .carousel-inner > .next {
      left: 16.6%;
   }
   .carousel-showmanymoveone .carousel-inner > .left,
   .carousel-showmanymoveone .carousel-inner > .prev.right,
   .carousel-showmanymoveone .carousel-inner > .active {
      left: 0;
   }
   .carousel-showmanymoveone .carousel-inner .cloneditem-2,
   .carousel-showmanymoveone .carousel-inner .cloneditem-3 {
      display: block;
   }
}

@media all and (min-width: 992px) and (transform-3d),
all and (min-width: 992px) and (-webkit-transform-3d) {
   .carousel-showmanymoveone .carousel-inner > .item.active.right,
   .carousel-showmanymoveone .carousel-inner > .item.next {
      -webkit-transform: translate3d(16.6%, 0, 0);
      transform: translate3d(16.6%, 0, 0);
      left: 0;
   }
   .carousel-showmanymoveone .carousel-inner > .item.active.left,
   .carousel-showmanymoveone .carousel-inner > .item.prev {
      -webkit-transform: translate3d(-16.6%, 0, 0);
      transform: translate3d(-16.6%, 0, 0);
      left: 0;
   }
   .carousel-showmanymoveone .carousel-inner > .item.left,
   .carousel-showmanymoveone .carousel-inner > .item.prev.right,
   .carousel-showmanymoveone .carousel-inner > .item.active {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
      left: 0;
   }
}
    </style>
    <script>
(function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<6;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());
 </script>
        </div>
</div>
</section>
<br><br><br>
</div>
<br>
<center>
    <h3 class="">Pague com os seguintes serviços:</h3>
</center>
<center>
    <img src="{{asset('img/visa.jpeg')}}" alt="Meia Lua" style="width:120px; margin-left:20px;">
    <img src="{{asset('img/PayPal-logo-20071-1.png')}}" alt="Meia Lua" style="width:120px;">
    <img src="{{asset('img/payments_12_550.png')}}" alt="Meia Lua" style="width:120px; margin-left:-1px;">
    <img src="{{asset('img/American-Express-Logotype-Single-Line.png')}}" alt="Meia Lua" style="width:200px; margin-left:-1px;">
    <img src="{{asset('img/jcb.png')}}" alt="Meia Lua" style="width:120px; margin-left:-1px;">
</center>
<br><br><br>
<!--JQUERY Validation-->
<script>
    //////////////////////////////////////
    $(document).ready(function() {

        $("#order_form").validate({
            submitHandler: function(form) {
                if ($('input[name=color]:checked').val() == undefined) {
                    document.getElementById("for_error").innerHTML = "<label class='error' style=' '>Porfavor confirme o pedido</label>";

                } else {
                    return true;
                }

            }
        });


    });

    $('.add').click(function() {

        $(this).prev().val(+$(this).prev().val() + 1);

    });
    $('.sub').click(function() {
        if ($(this).next().val() > 1) {
            $(this).next().val(+$(this).next().val() - 1);
        }
    });
</script>
<!--/JQUERY Validation-->
<!-- /SECTION -->
@endsection