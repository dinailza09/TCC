<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>PetShop - Villa Pet</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header -->
        @include('home.header')
         <!-- slider -->
        
    <!-- product section -->
<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                   <span>Cachorro</span>
               </h2>
               <br><br>
            </div>
            @if(session()->has('message'))

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
  {{session()->get('message')}}
    </div>
@endif
            <div class="row">
            @foreach($product as $products)

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details', $products->id)}}" class="option1">
                           Detalhes do Produto
                           </a>
                           <form action="{{url('add_cart', $products->id)}}" method="Post">

                              @csrf
                              
                              <div class="row">
                                 <div class="col-md-4">  
                                 <input type="number" name="quantity" value="1" min="1" style="width:100px">
                                 </div>
                                 <div class="col-md-4"> 
                                 <input type="submit" value="Adicionar no carrinho">
                                 </div>
                             
                           </div>
                           </form>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                         {{$products->title}}
                        </h5>

                        @if($products->discount_price!=null)

                        <h6 style="color: red" >
                        Desconto
                        <br>
                        R${{$products->discount_price}}
                        </h6>       
                        
                         <h6 style="text-decoration: line-through; color: blue">
                         Preço
                         <br>
                        R${{$products->price}}
                        </h6>

                        @else

                        <h6 style="color: blue">
                        Preço
                         <br>
                         R${{$products->price}}
                        </h6>       
                        

                        @endif

                      
                     </div>
                  </div>
               </div>
               
               @endforeach

               <span style="padding-top: 20px;">

              {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}

            </span>
            
         </div>
      </section>
      </div>
     


      <div class="cpy_">
         <p class="mx-auto">Copyright 2022 © Todos os direitos reservados à <a href="#"> Villa Pet</a><br>
         
            Feito por <a href="#">Dinailza Soares</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>