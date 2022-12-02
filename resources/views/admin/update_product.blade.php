<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
          @if(session()->has('message'))

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
  {{session()->get('message')}}
    </div>
@endif
         
<div class="div_design">
<h2 class="font_size">Editar Produto<h2>

<form action="{{url('/update_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">

@csrf

<div class="div_design">
<label>Título</label>
<input class="text_color" type="text" name="title" required=""  value="{{$product->title}}">
</div>

<div class="div_design">
<label>Descrição</label>
<input class="text_color" type="text" name="description" required="" value="{{$product->description}}">
</div>

<div class="div_design">
<label>Preço</label>
<input class="text_color"  type="text" name="price" required="" value="{{$product->price}}">
</div>

<div class="div_design">
<label>Quantidade</label>
<input class="text_color" type="number" min="0" name="quantity" required="" value="{{$product->quantity}}">
</div>

<div class="div_design">
<label>Desconto do Preço</label>
<input class="text_color"  type="text" name="discount_price" value="{{$product->discount_price}}">
</div>

<div class="div_design">
<label>Categoria:</label>
<select class="text_color" name="category" required="">
    <option value="{{$product->category}}" selected="">{{$product->category}}</option>
    @foreach($category as $category)
    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
    @endforeach
</select>
</div>


<div class="div_design">
<label>Imagem</label>
<img style="margin:auto;" height="100" width="100" src="/product/{{$product->image}}">
</div>


<div class="div_design">
<label>Imagem</label>
<input type="file" name="image">
</div>



<div class="div_design">
<input type="submit" class="btn btn-primary" name="submit" value="Editar produto">
</div>

</form>

</div>
</div>
            <!-- script -->
          @include('admin.script')
  </body>
</html>