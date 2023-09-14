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
        Schema::create('capaians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kpi');
            $table->integer('capaian_int');
            $table->enum('tipe_capaian', ['persentase', 'produk', 'orang', 'juta', 'milyar', 'orang/bulan']);
            $table->string('fixed_capaian')->nullable();
            $table->string('bulan')->nullable();
            $table->timestamps();

            @$table->foreign('id_kpi')
                ->references('id')->on('k_p_i_s');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capaians');
    }
};
