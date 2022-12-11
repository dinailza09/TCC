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

      @include('sweetalert::alert')

      <div class="hero_area">
         <!-- header -->
        @include('home.header')
         <!-- slider -->
         @include('home.slider')
        
      </div>
      <!-- why section -->
      @include('home.why')
      <!-- arrival section -->
      @include('home.new_arival')
      <!-- end product section -->
      @include('home.product')
      <!-- subscribe section -->
      <!-- footer -->
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