<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photo extends Model
{
    protected $table = 'foto';
    protected $primaryKey = 'id_foto';
    protected $keyType = 'int';

    protected $fillable = [
        "photos",
        "id_photo_unique",
        "id_kategori_foto",
        "id_album",
        "id_users",
        "foto",
        "tahun_upload",
        "file_foto",
        "thumb",
        "ext",
        "keterangan",
        "tag_foto",
        "keyword_foto",
        "aktif",
        "hapus",
        "waktu_upload",
        "media_type",
    ];

    function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'id_foto');
    }
}
