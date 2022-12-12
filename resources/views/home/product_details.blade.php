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
      <link rel="shortcut icon" href="/images/favicon.png" type="">
      <title>Produto - Villa Pet</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />

      <link href="{{asset('home/css/font-awesome.min.css')}}"  rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header -->
        @include('home.header')  

      <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; width:50%; padding:30px">            
                     <div class="img-box" style="padding: 20px">
                        <img src="/product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                         {{$product->title}}
                        </h5>

                        @if($product->discount_price!=null)

                        <h6 style="color: red" >
                        Desconto
                        <br>
                        R${{$product->discount_price}}
                        </h6>       
                        
                         <h6 style="text-decoration: line-through; color: blue">
                         Preço
                         <br>
                        R${{$product->price}}
                        </h6>

                        @else

                        <h6 style="color: blue">
                        Preço
                         <br>
                         R${{$product->price}}
                        </h6>       
                        

                        @endif

                        <h6>Categoria do Produto:{{$product->category}}</h6>
                        <h6>Descrição do Produto:{{$product->description}}</h6>
                        <h6>Quantidade:{{$product->quantity}}</h6>


                        <form action="{{url('add_cart', $product->id)}}" method="Post">

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
               </div>





      
      @include('home.footer')
      


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