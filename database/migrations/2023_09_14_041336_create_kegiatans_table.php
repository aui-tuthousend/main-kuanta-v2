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
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kpi');
            $table->unsignedBigInteger('id_program');
            $table->unsignedBigInteger('id_user');
            $table->string('judul_program');
            $table->string('judul');
            $table->enum('circle', ['admin', 'executive', 'creative technology', 'school design', 'operation', 'partnership', 'kuanta institute']);
            $table->integer('target_int');
            $table->string('target')->nullable();
            $table->enum('tipe_target', ['persentase', 'produk', 'orang', 'juta', 'milyar', 'orang/bulan']);
            $table->integer('capaian')->nullable();
            $table->string('fixed_capaian')->nullable();
            $table->string('catatan')->nullable();
            $table->string('user_name');
            $table->timestamp('deadline');
            $table->enum('status', ['on going', 'selesai', 'pending', 'expired'])->default('pending');
            $table->integer('achieved')->nullable();
            $table->timestamps();

            @$table->foreign('id_kpi')
                ->references('id')->on('k_p_i_s');

            @$table->foreign('id_program')
                ->references('id')->on('programs');

            @$table->foreign('id_user')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
