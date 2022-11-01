<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_productos', function (Blueprint $table) {
            $table->id();
            $table->string('ruta');
            $table->timestamps();
            $table->foreignId('producto_id')->constrained('productos');
            $table->string('orden');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagen_productos');
    }
}
