<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('canciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('artistas');
            $table->string('album'); // Cambia este tipo según tu diseño
            $table->string('duracion');
            $table->string('imgportada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('canciones');
    }
};
