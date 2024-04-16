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
        Schema::create('informacions', function (Blueprint $table) {
                $table->id();
                $table->string('pieza');
                $table->integer('peso_teorico');
                $table->decimal('peso_real',8,2);
                $table->string('estado');
                $table->string('proyecto');
                $table->string('bloque');
                $table->date('fecha_registrio');
                $table->string('registrado');
                $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacions');
    }
};
