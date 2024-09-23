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
    Schema::create('campanias', function (Blueprint $table) {
        $table->id('id_campania');
        $table->string('nombre');
        $table->date('fecha_inicio');
        $table->date('fecha_fin');
        $table->decimal('presupuesto', 10, 2);
        $table->enum('canal', ['email', 'redes_sociales']);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campania_marketings');
    }
};
