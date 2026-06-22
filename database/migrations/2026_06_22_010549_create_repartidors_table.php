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
        Schema::create('repartidors', function (Blueprint $table) {
            $table->id('id_repartidor'); //We take advantege of this id, and we called id_repartidor
            $table->string('nombre');
            $table->string('email')->nullable(); 
            //This means, that the email can be null.
            $table->timestamps();
            //For laravel community, they recommend to keep this as an attribute for when its registred the value
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repartidors');
    }
};
