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
      .center{
        margin: auto;
        width: 50%;
        text-align:center;
        margin-top: 30px;
        border: 3px solid white;
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
<div class="div_center">
  <h2 class="h2_font">Adicionar Categoria<h2>

 <form action="{{url('/add_category')}}" method="POST">

  @csrf
  
<input class="input_color" type="text" name="category" placeholder="Digite a categoria">

<input type="submit" class="btn btn-primary" name="submit" value="Adicionar Categoria">

</form>
</div>

<table class="center">
  <tr>
  <td>Nome da Categoria</td>
  <td>Ação</td>
  </tr>

  @foreach($data as $data)
  <tr>
  <td>{{$data->category_name}}</td>
  <td>
  <a onclick="return confirm ('Você realmente deseja deletar!')" class="btn btn-danger"href="{{url('delete_category', $data->id)}}">Deletar</a>
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