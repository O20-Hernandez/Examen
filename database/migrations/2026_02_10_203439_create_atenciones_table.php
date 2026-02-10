<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
   Schema::create('atenciones', function (Blueprint $table) {
    $table->id();
    $table->foreignId('pasientes_id')->constrained();
    $table->foreignId('profecionales_id')->constrained();
    $table->foreignId('categorias_motivo_id')->constrained();
    $table->date('fecha');
    $table->time('hora');
    $table->text('motivo_detalle');
    $table->timestamps();
});
    }   
};