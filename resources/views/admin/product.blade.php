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
         
<div class="div_center">
  <h2 class="font_size">Adicionar Produto<h2>

 <div class="div_design">
<label>Título</label>
<input class="text_color" type="text" name="title" placeholder="Digite o título">
</div>

<div class="div_design">
<label>Descrição</label>
<input class="text_color" type="text" name="description" placeholder="Digite a descrição">
</div>

<div class="div_design">
<label>Preço</label>
<input class="text_color" type="number" name="price" placeholder="Digite o preço">
</div>

<div class="div_design">
<label>Quantidade</label>
<input class="text_color" type="number" min="0" name="quantity" placeholder="Digite a quantidade">
</div>

<div class="div_design">
<label>Categoria:</label>
<select class="text_color" name="category">
    <option value="" selected="">Adicionar a categoria</option>
    <option>shirt</option>
</select>
</div>

<div class="div_design">
<label>Imagem</label>
<input type="file" name="image">
</div>

<div class="div_design">
<label>Desconto do Preço</label>
<input class="text_color" type="number" name="discount_price" placeholder="Digite o desconto">
</div>

<div class="div_design">
<input type="submit" class="btn btn-primary" name="submit" value="Adicionar produto">
</div>



</div>
</div>
            <!-- script -->
          @include('admin.script')
  </body>
</html>