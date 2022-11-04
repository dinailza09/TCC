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
              <th style="padding: 10px;">Nome</th>
              <th  style="padding 10px;">Email</th>
              <th  style="padding 10px;">Endereço</th>
              <th  style="padding 10px;">Telefone</th>
              <th  style="padding 10px;">Título do produto</th>
              <th  style="padding 10px;">Quantidade</th>
              <th  style="padding 10px;">Preço</th>
              <th style="padding 10px;">Status do pagamento</th>
              <th  style="padding 10px;">Status do delivery</th>
              <th  style="padding 10px;">Imagem</th>
              <th  style="padding 10px;">Delivered</th>

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

              <td><a href="" class="btn btn-primary">Deliverd</a></td>
    </tr>

    @endforeach
          </table>

</div>
</div>
           <!-- script -->
          @include('admin.script')
  </body>
</html>