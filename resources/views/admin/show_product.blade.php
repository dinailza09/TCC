<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- css -->
    @include('admin.css')
    <style type="text/css">
      .center
      {
        margin:auto;
        width:50%;
        border: 2px solid white;
        text-align:center;
        margin-top: 40px;
      }
      .font_size
      {
        text-align:center;
        font-size:40px;
        padding-top:20px;
      }
      .img_size
      {
        width:150px;
        height:100px;
      }
      .th_color
      {
       background: brown;
      }

      .th_deg
      {
        padding:30px;
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
          @if(session()->has('message'))

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
  {{session()->get('message')}}
    </div>
@endif
          <h2 class="font_size">Todos os produtos</h2>
          <table class="center">
            <tr class="th_color">
                <th class="th_deg">Título</th>
                <th class="th_deg">Descrição</th>
                <th class="th_deg">Quantidade</th>
                <th class="th_deg">Categoria</th>
                <th class="th_deg">Preço</th>
                <th class="th_deg">Desconto do Preço</th>
                <th class="th_deg">Imagens do Produto</th>
                <th class="th_deg">Deletar</th>
                <th class="th_deg">Editar</th>
            </tr>

            @foreach($product as $product)
            <tr>
                <th>{{$product->title}}</th>
                <th>{{$product->description}}</th>
                <th>{{$product->quantity}}</th>
                <th>{{$product->category}}</th>
                <th>R${{$product->price}}</th>
                <th>R${{$product->discount_price}}</th>
                <th><img class="img_size" src="/product/{{$product->image}}"></th>
           
           <td><a class="btn btn-danger" onclick="return confirm('Deseja realmente deletar esse produto!')" href="{{url('delete_product', $product->id)}}">Deletar</td>
           <td><a class="btn btn-success" href="{{url('update_product', $product->id)}}">Editar</td>

            </tr>

@endforeach
          </table>

</div>
</div>
          <!-- script -->
          @include('admin.script')
  </body>

</html>