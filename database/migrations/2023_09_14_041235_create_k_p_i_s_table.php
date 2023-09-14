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
        Schema::create('k_p_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->integer('target_int')->nullable();
            $table->string('target')->nullable();
            $table->enum('tipe_target', ['persentase', 'produk', 'orang', 'juta', 'milyar', 'orang/bulan'])->nullable();
            $table->enum('circle', ['admin', 'executive', 'creative technology', 'school design', 'operation', 'partnership', 'kuanta institute']);
            $table->enum('tipe', ['target', 'productivity']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_p_i_s');
    }
};
