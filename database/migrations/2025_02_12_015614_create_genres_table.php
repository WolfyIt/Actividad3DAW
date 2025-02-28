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
        Schema::create('genders', function (Blueprint $table) {
            $table->id(); // Crea la columna 'id' como clave primaria
            $table->string('gender'); // Crea la columna 'name' para el nombre del género
            $table->timestamps(); // Crea las columnas 'created_at' y 'updated_at'
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genres');
    }
};
