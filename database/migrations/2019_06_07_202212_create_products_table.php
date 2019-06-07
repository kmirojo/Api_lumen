<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Para crear Tablas de las migraciones ($ php artisan migrate)
 * Creación de Tabla 'Products'
 */
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     * ORM?? 
     * @return void
     */
    public function up()
    {   
        // ↓↓ Creación de Base de datos en Lumen ↓↓
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->longText('description');
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
        Schema::dropIfExists('products');
    }
}
