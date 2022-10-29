<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- css -->
    @include('admin.css')
    <style type="text/css">
      .div_center
      {
        text-align:center;
        padding-top:40px;
      }
      .h2_font{
        font-size:40px;
        padding-bottom:40px;
      }
      .input_color{
        color: black;
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
  <h2 class="h2_font">Adicionar Categoria<h2>

 <form>
<input class="input_color" type="text" name="name" placeholder="write category name">

<input type="submit" class="btn btn-primary" name="submit" value="Add Category">

</form>
</div>

</div>
</div>
            <!-- script -->
          @include('admin.script')
  </body>
</html>