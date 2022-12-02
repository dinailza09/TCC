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
        font-weight:bold;
        padding-bottom: 40px;
      }
      .table_deg{
        border: 2px solid white;
        width: 100%;
        margin-top: 50px;
        
      }
      .th_deg{
        background-color:brown;
      }
      .img_size{
        width:80px;
        height: 80px;
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
            <th style="padding: 5px;">Nº Pedido</th>
              <th style="padding: 5px;">Nome</th>
              <th  style="padding: 5px;">Endereço</th>
              <th  style="padding: 5px;">Telefone</th>
              <th  style="padding: 5px;">Título do produto</th>
              <th  style="padding: 5px;">Quantidade</th>
              <th  style="padding: 5px;">Preço</th>
              <th style="padding: 5px;">Status do pagamento</th>
              <th  style="padding: 5px;">Status do delivery</th>
              <th  style="padding: 5px;">Imagem</th>
              <th  style="padding: 5px;">Entregue</th>
              <th  style="padding: 5px;">Gerar PDF</th>
              <th  style="padding: 5px;">Enviar Email</th>

            </tr>

            @foreach($order as $order)
            <tr>
            <th><center>{{$order->id}}</center></th>
              <th>{{$order->name}}</th>
              <th>{{$order->address}}</th>
              <th>{{$order->phone}}</th>
              <th><center>{{$order->product_title}}</center></th>
              <th><center>{{$order->quantity}}</center></th>
              <th><center>{{$order->price}}</center></th>
              <th>{{$order->payment_status}}</th>
              <th>{{$order->delivery_status}}</th>
              <th><img class="img_size" src="/product/{{$order->image}}"></th>

              <td>
                @if($order->delivery_status=='processing')
                <a href="{{url('delivered', $order->id)}}" onclick="return confirm('Are you sure this product is delivered!!!')" class="btn btn-primary">Entregue</a>
              @else
              <p style="color:green;">Entregue</p>
              
                @endif
              </td>

<td>
  <a href="{{url('print_pdf', $order->id)}}"class="btn btn-secondary">PDF</a>
</td>

<td>
  <a href="{{url('send_email', $order->id)}}"class="btn btn-info">Enviar Email</a>
</td>

 
    </tr>

    @endforeach
          </table>

</div>
</div>
           <!-- script -->
          @include('admin.script')
  </body>
</html>