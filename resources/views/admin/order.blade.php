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

         <b><h1>Todos os pedidos</h1></b><br>

         <div style="padding-left: 400px; padding-bottom:30px; ">
            <form action="{{url('search')}}" method="GET">
              @csrf
            <input type="text" style="color: black;" name="search" placeholder="Digite para pesquisar">
    <input type="submit" value="Search" class="btn btn-outline-primary">
            </form>
          </div>  



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
              <th  style="padding: 5px;">Delivery</th>
              <th  style="padding: 5px;">Gerar PDF</th>
              <th  style="padding: 5px;">Enviar Email</th>

            </tr>

            @forelse($order as $order)
            <tr>
            <th>{{$order->id}}</th>
              <th>{{$order->name}}</th>

              <th>{{$order->address}}</th>
              <th>{{$order->phone}}</th>
              <th><center>{{$order->product_title}}</center></th>
              <th><center>{{$order->quantity}}</center></th>
              <th><center>R${{$order->price}}</center></th><br>
              <th><center>{{$order->payment_status}}<center></th>
              <th>{{$order->delivery_status}}</th>
              <th><img class="img_size" src="/product/{{$order->image}}"></th>

              <td>
                @if($order->delivery_status=='Processando')
                <center> <a href="{{url('delivered', $order->id)}}" onclick="return confirm('Tem certeza que este produto foi entregue!')" class="btn btn-primary">Delivery</a></center>
              @else
              <center> <p style="color:green;">Delivery</p></center>
              
                @endif
              </td>

<td>
  <a href="{{url('print_pdf', $order->id)}}"class="btn btn-secondary">PDF</a>
</td>

<td>
  <a href="{{url('send_email', $order->id)}}"class="btn btn-info">Enviar Email</a>
</td>

 
    </tr>

    @empty
    <tr>
      <td colspan="16">Não encontrado!</td>
    </tr>

    @endforelse
          </table>

</div>
</div>
           <!-- script -->
          @include('admin.script')
  </body>
</html>