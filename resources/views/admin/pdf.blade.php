<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    <h1>Detalhes do pedido</h1>

   Nome do cliente: <h3>{{$order->name}}</h3>
   Email do cliente: <h3>{{$order->email}}</h3>
   Telefone do cliente: <h3>{{$order->phone}}</h3>
   Endereço do cliente: <h3>{{$order->address}}</h3>
   Id do cliente: <h3>{{$order->user_id}}</h3>
   Nome do Produto: <h3>{{$order->product_title}}</h3>
   Preço do Produto: <h3>R${{$order->price}}</h3> 
   Quantidade do Produto: <h3>{{$order->quantity}}</h3>
   Status do Pagamento: <h3>{{$order->payment_status}}</h3>
   Id do Produto: <h3>{{$order->Product_id}}</h3>
</body>

</html>