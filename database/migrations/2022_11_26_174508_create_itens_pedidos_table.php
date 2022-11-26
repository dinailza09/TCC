<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer("quantity");
            $table->decimal("price");
            $table->integer("produto_id")->unsigned();
            $table->integer("pedido_id")->unsigned();
            $table->timestamps();

            $table->foreign("produto_id")
            ->references("id")
            ->on("products")->onDelete("cascade");

            $table->foreign("pedido_id")
            ->references("id")
            ->on("orders")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens_pedidos');
    }
};
