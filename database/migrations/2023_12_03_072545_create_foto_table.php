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
        Schema::create('foto', function (Blueprint $table) {

            $table->id('id_foto');
            $table->tinyInteger('id_kategori_foto')->nullable(false);
            $table->smallInteger('id_album')->nullable(false);
            $table->tinyInteger('id_users')->nullable(false);
            $table->string('foto')->nullable(false);
            $table->string('tahun_upload')->nullable(false);
            $table->string('file_foto')->nullable(false);
            $table->string('thumb')->nullable(false);
            $table->string('ext')->nullable(false);
            $table->string('keterangan')->nullable(false);
            $table->string('tag_foto')->nullable(false);
            $table->string('keyword_foto')->nullable(false);
            $table->tinyInteger('aktif')->nullable(false);
            $table->tinyInteger('hapus')->nullable(false);
            $table->string('waktu_upload')->nullable(false);
            $table->enum('media_type', ['foto', 'file'])->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto');
    }
};
