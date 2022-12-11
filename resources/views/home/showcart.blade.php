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
      <title>Carrinho - Villa Pet</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <link href="{{asset('home/css/font-awesome.min.css')}}"  rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />


   <style type="text/css">
    .center{
        margin:auto;
        text-align:center;
        padding: 30px;
    }

    table, th, td {
        border: 1px solid grey;
        
    }

    .th_deg{
        font-size: 20px;
        padding: 5px;
        background:brown;
    }
    .img_deg{
        height: 100px;
        width:100px;
       
    }
    .total_deg{
        font-size: 20px;
        padding: 40px;
       
    }
    </style>




   </head>
   <body>

   @include('sweetalert::alert')

      <div class="hero_area">
         <!-- header -->
        @include('home.header')

        @if(session()->has('message'))

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
  {{session()->get('message')}}
    </div>
@endif

        
      <div class="center">
        <table>
            <tr>
            <th class="th_deg">Título</th>
            <th class="th_deg">Quantidade</th>
            <th class="th_deg">Preço </th>
            <th class="th_deg">Imagem</th>
            <th class="th_deg">Ação</th>
           </tr>

           <?php $totalprice=0; ?>

           @foreach($cart as $cart)
            <tr>
            <th>{{$cart->product_title}}</th>
            <th>{{$cart->quantity}}</th>
            <th>R${{$cart->price}} </th>

            <th><img class="img_deg" src="/product/{{$cart->image}}"></th>
            <th><a class="btn btn-danger" onclick="confirmation(event)" href="{{url('/remove_cart', $cart->id)}}">Remover</th>
            </tr>

            <?php $totalprice=$totalprice + $cart->price ?>

            @endforeach

        </table>
        <div>
            <h1 class="total_deg">Valor Total: R${{$totalprice}}</h1>
        </div> <div>
        <h1 style="font-size:25px; padding-bottom: 15px;">Proceder ao pedido</h1>
        <a href="{{url('cash_order')}}" class="btn btn-danger">Dinheiro na entrega</a>
        <a href="{{url('stripe', $totalprice)}}" class="btn btn-danger">Pague com cartão</a>
</div>
     </div>
    
     



      <<div class="cpy_">
         <p class="mx-auto">Copyright 2022 © Todos os direitos reservados à <a href="#"> Villa Pet</a><br>
         
            Feito por <a href="#">Dinailza Soares</a>
         
         </p>
      </div>

      <script>
      function confirmation(ev){
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
    swal({
    title: "Você quer realmente excluir esse produto?",
    text: "Você não será capaz de reverter isso!!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
 })
 .then((willCancel)=> {
    if(willCancel){
        window.location.href = urlToRedirect;
    } 
});
 }
</script>

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