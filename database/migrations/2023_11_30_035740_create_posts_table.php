<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id_post');
            $table->integer('id_kanal');
            $table->tinyInteger('id_user');
            $table->integer('id_foto');
            $table->tinyInteger('headline');
            $table->datetime('waktu_entri');
            $table->datetime('waktu_publish');
            $table->integer('waktu_publish_unix');
            $table->datetime('waktu_update');
            $table->string('judul_berita');
            $table->string('url');
            $table->text('isi_berita');
            $table->string('keyword');
            $table->string('deskripsi');
            $table->mediumInteger('hits');
            $table->tinyInteger('jenis_berita');
            $table->enum('status_publish', ['1', '2']);
            $table->tinyInteger('content_type');
            $table->tinyInteger('hapus');
            $table->tinyInteger('pilihan');
            $table->string('tag_old');
            $table->string('gambar');
            $table->date('tanggal_agenda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
