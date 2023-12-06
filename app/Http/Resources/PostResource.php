<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id_post" => $this->id_post,
            "id_kanal" => $this->id_kanal,
            "id_user" => $this->id_user,
            "id_foto" => $this->id_foto,
            "headline" => $this->headline,
            "waktu_entri" => $this->waktu_entri,
            "waktu_publish" => $this->waktu_publish,
            "waktu_publish_unix" => $this->waktu_publish_unix,
            "waktu_update" => $this->waktu_update,
            "judul_berita" => $this->judul_berita,
            "url" => $this->url,
            "foto" => $this->photo,
            "isi_berita" => $this->isi_berita,
            "keyword" => $this->keyword,
            "deskripsi" => $this->deskripsi,
            "hits" => $this->hits,
            "jenis_berita" => $this->jenis_berita,
            "status_publish" => $this->status_publish,
            "content_type" => $this->content_type,
            "hapus" => $this->hapus,
            "pilihan" => $this->pilihan,
            "tag_old" => $this->tag_old,
            "gambar" => $this->gambar,
            "tanggal_agenda" => $this->tanggal_agenda,
        ];
    }
}
