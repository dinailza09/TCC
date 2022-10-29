<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- css -->
    @include('admin.css')
    <style type="text/css">
      .font_size
      {
        font-size:40px;
        padding-bottom:40px;
      }
      .text_color{
        color: black;
        padding-bottom:20px;
      }
      label{
        display: inline block;
        width: 200px;
      }
      .div_design{
        padding-bottom:15px;
        text-align:center;
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
          <div class="div_center">
         
<div class="div_design">
<h2 class="font_size">Adicionar Produto<h2>

<form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

@csrf

<div class="div_design">
<label>Título</label>
<input class="text_color" type="text" name="title" required="" placeholder="Digite o título">
</div>

<div class="div_design">
<label>Descrição</label>
<input class="text_color" type="text" name="description" required="" placeholder="Digite a descrição">
</div>

<div class="div_design">
<label>Preço</label>
<input class="text_color" type="number" name="price" required="" placeholder="Digite o preço">
</div>

<div class="div_design">
<label>Quantidade</label>
<input class="text_color" type="number" min="0" name="quantity" required="" placeholder="Digite a quantidade">
</div>

<div class="div_design">
<label>Categoria:</label>
<select class="text_color" name="category" required="">
    <option value="" selected="">Adicionar a categoria</option>
    <option>shirt</option>
</select>
</div>

<div class="div_design">
<label>Imagem</label>
<input type="file" name="image" required="">
</div>

<div class="div_design">
<label>Desconto do Preço</label>
<input class="text_color" type="number" name="discount_price" placeholder="Digite o desconto">
</div>

<div class="div_design">
<input type="submit" class="btn btn-primary" name="submit" value="Adicionar produto">
</div>

</form>

</div>
</div>
            <!-- script -->
          @include('admin.script')
  </body>
</html>