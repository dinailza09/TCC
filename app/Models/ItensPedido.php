<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensPedido extends Model
{
    protected $table = "itens_pedidos";

    protected $fillable = ['Product_id', 'user_id', 'order_id', 'price'];
}
