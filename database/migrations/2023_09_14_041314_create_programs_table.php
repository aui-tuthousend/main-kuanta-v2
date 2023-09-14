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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kpi');
            $table->string('judul_kpi');
            $table->string('circle');
            $table->string('judul');
            $table->string('pj');
            $table->enum('status', ['on going', 'selesai', 'pending'])->default('pending');
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
        Schema::dropIfExists('programs');
    }
};
