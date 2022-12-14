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
      <title>Petshop - Villa Pet</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />

      <link href="{{asset('home/css/font-awesome.min.css')}}"  rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
   <style>

    .center{
        margin: auto;
        width: 70%;
        padding: 30px;
        text-align: center;

    }

    table,th,td{
        border: 1px solid black;
    }

    .th_deg{
        padding: 10px;
        background-color: brown;
        font-size: 20px;
        font-weight: bold;
    }

    </style>
   
    </head>
   <body>
      
        @include('home.header')
      
      </div>
      <div class="center">
        <table>
            <tr>
                <th class="th_deg">Título do Produto</th>
                <th class="th_deg">Quantidade</th>
                <th class="th_deg">Preço</th>
                <th class="th_deg">Status de Pagamento</th>
                <th class="th_deg">Status de Delivery</th>
                <th class="th_deg">Imagem</th>
                <th class="th_deg">Cancelar Pedido</th>
            </tr>
            @foreach($order as $order)
            <tr>
            <td>{{$order->product_title}}</td>
            <td>{{$order->quantity}}</td>
            <td>R${{$order->price}}</td>
            <td>{{$order->payment_status}}</td>
            <td>{{$order->delivery_status}}</td>
            <td><img height="100" width="180" src="product/{{$order->image}}"></td>
            <td>
                @if($order->delivery_status =='Processando')
                <a onclick="return confirm('Você quer realmente cancelar esse pedido')" class="btn btn-danger" href="{{url('cancel_order', $order->id)}}">Cancelar Pedido</a>
            
            @else 
            
            <p style="color: blue;"> Não é permitido!</p>
            
                @endif
            </td>
       </tr>
@endforeach
</table>
    
     
      


      
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