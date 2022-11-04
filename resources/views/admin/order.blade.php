<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- css -->
    @include('admin.css')
    <style type="text/css">
      .title_deg
      {
        text-align:center;
        font-size: 25px;
        font-wights:bold;
        padding-bottom: 40px;
      }
      .table_deg{
        border: 2px solid white;
        width: 70%;
        margin-top: 50px;
        
      }
      .th_deg{
        background-color:skyblue;
      }
      .img_size{
        width:200px;
        height: 200px;
      }
      </style>
  </head>
  <body>
    <div class="container-scroller">
          <!-- sidebar -->
          @include('admin.sidebar')
          <!-- header -->
          @include('admin.header')
      

          <div class="main-panel">
          <div class="content-wrapper">

          <h1>Todos os pedidos</h1>
          <table class="table_deg">
            <tr class="th_deg">
              <th>Nome</th>
              <th>Email</th>
              <th>Endereço</th>
              <th>Telefone</th>
              <th>Título do produto</th>
              <th>Quantidade</th>
              <th>Preço</th>
              <th>Status do pagamento</th>
              <th>Status do delivery</th>
              <th>Imagem</th>

            </tr>

            @foreach($order as $order)
            <tr>
              <th>{{$order->name}}</th>
              <th>{{$order->email}}</th>
              <th>{{$order->address}}</th>
              <th>{{$order->phone}}</th>
              <th>{{$order->product_title}}</th>
              <th>{{$order->quantity}}</th>
              <th>{{$order->price}}</th>
              <th>{{$order->payment_status}}</th>
              <th>{{$order->delivery_status}}</th>
              <th><img class="img_size" src="/product/{{$order->image}}"></th>
    </tr>
    @endforeach
          </table>

</div>
</div>
           <!-- script -->
          @include('admin.script')
  </body>
</html>