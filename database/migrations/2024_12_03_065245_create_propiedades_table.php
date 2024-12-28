<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',200)->nullable();
            $table->string('tipo',100)->nullable();
            $table->string('operacion',100)->nullable();
            $table->string('forma_de_pago',200)->nullable();
            $table->string('habitaciones',200)->nullable();
            $table->string('baños',200)->nullable();
            $table->string('metraje',200)->nullable();

            $table->string('cocheras',100)->nullable();
            $table->string('descripcion_detallada',600)->nullable();
            $table->string('video',600)->nullable();
            $table->string('nombre_contacto',200)->nullable();
            $table->string('email_contacto',100)->nullable();
            $table->string('telefono_contacto',50)->nullable();
            $table->boolean('publicada')->nullable();
            $table->string('comodidades',200)->nullable();

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
        Schema::dropIfExists('propiedades');
    }
}
