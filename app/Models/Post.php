<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id_post';
    protected $keyType = 'integer';
    protected $fillable = [
        "id_kanal",
        "id_user",
        "id_foto",
        "headline",
        "waktu_entri",
        "waktu_publish",
        "waktu_publish_unix",
        "waktu_update",
        "judul_berita",
        "url",
        "isi_berita",
        "keyword",
        "deskripsi",
        "hits",
        "jenis_berita",
        "status_publish",
        "content_type",
        "hapus",
        "pilihan",
        "tag_old",
        "gambar",
        "tanggal_agenda",
    ];
    public function photo(): HasOne
    {
        return $this->hasOne(
            Photo::class, 'id_foto', 'id_foto'
        );
    }
}
