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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();

            $table->float('PrecioCompra')->nullable();
            $table->float('precio');
            $table->integer('cantidad');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('proveedore_id')->nullable();
            $table->unsignedBigInteger('producto_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('proveedore_id')->references('id')->on('proveedores')->onDelete('set null');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
};
