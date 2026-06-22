<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->id('id_envio');

            $table->foreignId('id_repartidor')->contrained('repartidors','id_repartidor');
            $table->foreignId('id_zona')->constrained('zonas','id_zona');

            $table->decimal('peso_kg',8,2);
            $table->date('fecha_envio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envios');
    }
};
