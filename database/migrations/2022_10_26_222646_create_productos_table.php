<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->decimal('precio',7,2);
            $table->string('imagen1');
            $table->string('imagen2');
            $table->string('imagen3');
            $table->integer('cantidad');
            $table->timestamps();

            //Crea llave foranea con el id de otra tabla
            $table->foreignId('categoria_id')->constrained('categorias');
            //Crea llave foranea con el id de otra tabla
            $table->foreignId('marca_id')->constrained('marcas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
