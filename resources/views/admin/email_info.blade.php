<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- css -->
    @include('admin.css')
<style type="text/css">
    label{
      display: inline-block;
      width: 100%;
      font-size: 15px;
      font-weight: bold;
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

          <h1 style="text-align: center; font-size:23px;" >Enviar email para {{$order->email}}</h1>

<form action="{{url('/send_user_email', $order->id)}}" method="POST">

@csrf
          <div style="padding-left: 35%; padding-top:30px;">
            <label>Saudação por Email:</label>
            <input style="color: black;" type="text" name="greeting">
</div>

<div style="padding-left: 35%; padding-top:30px;">
            <label>Título:</label>
            <input style="color: black;" type="text" name="firstline">
</div>

<div style="padding-left: 35%; padding-top:30px;">
            <label>Corpo do Email:</label>
            <input style="color: black;" type="text" name="body">
</div>

<div style="padding-left: 35%; padding-top:30px;">
            <label>Nome do botão do link:</label>
            <input style="color: black;" type="text" name="button">
</div>

<div style="padding-left: 35%; padding-top:30px;">
            <label> Link do botão (URL):</label>
            <input style="color: black;" type="text" name="url">
</div>

<div style="padding-left: 35%; padding-top:30px;">
            <label> Última Linha do Email:</label>
            <input style="color: black;" type="text" name="lastline">
</div>

<div style="padding-left: 35%; padding-top:30px;">
            <input type="submit" value="Enviar Email" class="btn btn-primary">
</div>

</form>
</div>
</div>
          <!-- script -->
          @include('admin.script')
  </body>
</html>