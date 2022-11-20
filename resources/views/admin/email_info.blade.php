<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/oublic">
    <!-- css -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
          <!-- sidebar -->
          @include('admin.sidebar')
          <!-- header -->
          @include('admin.header')
        

          <div class="main-panel">
          <div class="content-wrapper">

          <h1 style="text-align: center; font-size:23px;" >Enviar email para {{$order->email}} </h1>

<form>
          <div style="padding-left: 35%; padding-top:30px;">
            <label>Saudação por Email:</label>
            <input type="text" name="greeting">
</div>

<div style="padding-left: 35%; padding-top:30px;">
            <label> Email FirstLing:</label>
            <input type="text" name="firstline">
</div>

<div style="padding-left: 35%; padding-top:30px;">
            <label>Corpo do Email:</label>
            <input type="text" name="body">
</div>

<div style="padding-left: 35%; padding-top:30px;">
            <label>Email Button name:</label>
            <input type="text" name="button">
</div>

<div style="padding-left: 35%; padding-top:30px;">
            <label> Email URL:</label>
            <input type="text" name="url">
</div>

<div style="padding-left: 35%; padding-top:30px;">
            <label> Email Last Line:</label>
            <input type="text" name="lastline">
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