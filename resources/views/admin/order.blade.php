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

            <tr>
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

          </table>

</div>
</div>
           <!-- script -->
          @include('admin.script')
  </body>
</html>