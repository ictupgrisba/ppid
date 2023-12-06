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
        Schema::create('post', function (Blueprint $table) {
            $table->id('id_post');
            $table->integer('id_kanal');
            $table->tinyInteger('id_user');
            $table->unsignedBigInteger('id_foto')->nullable(false);
            $table->tinyInteger('headline');
            $table->datetime('waktu_entri')->nullable(false)->useCurrent();
            $table->datetime('waktu_publish')->nullable(false)->useCurrent();
            $table->integer('waktu_publish_unix');
            $table->datetime('waktu_update')->nullable(false)->useCurrent();
            $table->string('judul_berita')->nullable(false);
            $table->string('url')->nullable(false);
            $table->text('isi_berita')->nullable(false);
            $table->string('keyword')->nullable(false);
            $table->string('deskripsi')->nullable(false);
            $table->mediumInteger('hits')->nullable(false);
            $table->tinyInteger('jenis_berita')->nullable(false);
            $table->enum('status_publish', ['1', '2'])->nullable(false);
            $table->tinyInteger('content_type')->nullable(false);
            $table->tinyInteger('hapus')->nullable(false);
            $table->tinyInteger('pilihan')->nullable(false);
            $table->string('tag_old')->nullable(false);
            $table->string('gambar');
            $table->date('tanggal_agenda')->nullable(false);
            $table->timestamps();

            $table->foreign('id_foto')
                ->on('foto')
                ->references('id_foto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
