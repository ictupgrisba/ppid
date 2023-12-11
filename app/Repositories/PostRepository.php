<?php

namespace App\Repositories;

use App\Helper\Helper;
use App\Models\Photo;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class PostRepository
{
    function listOfPublishedScheduleWith(int $limit): Collection|array
    {
        $params = [
            ['content_type', '=', '4'],
            ['status_publish', '=', '2']
        ];
        $mapToViewsItem = function($item){
            $item['title'] = Helper::dateBy($item['tanggal_agenda']);
            $item['month'] = Helper::monthBy($item['tanggal_agenda']);
            return $item;
        };
        return Post::query()
            ->where($params)
            ->orderByDesc('tanggal_agenda')
            ->limit($limit)
            ->get()
            ->map($mapToViewsItem);
    }

    function getRelatedData(): mixed
    {
        return Post::query()->find(20);
    }

    function listOfSpotlightPublishedNews(): Collection|array
    {
        $params = [
            "content_type" => "1",
            "status_publish" => "2",
            "hapus" => "0",
            "pilihan" => "1",
            "id_kanal" => "1"
        ];
        $academic_params = $params;

        $student_params = $params;
        $student_params['id_kanal'] = '2';

        $event_params = $params;
        $event_params['id_kanal'] = '5';

        $event_news = Post::query()
            ->where($event_params)
            ->orderByDesc('waktu_publish_unix')
            ->limit(2);

        $student_news = Post::query()
            ->where($student_params)
            ->orderByDesc('waktu_publish_unix')
            ->limit(2);

        $mapToViewsItem = function($item){
            // $item['description'] = explode(' ', $item['judul_berita']);
            $base_url = \env('BASE_APP_URL') .
                '/assets/media/' .
                $item['photo']['tahun_upload'] . '/' .
                $item['photo']['file_foto'] .
                $item['photo']['thumb'] .
                $item['photo']['ext'];

            $item['img_url'] = $base_url;
            // Log::debug($item);
            return $item;
        };
        // Log::debug("isModelRelated = ". Post::query()->getRelation('photo')->get());
        $academic_news = Post::query()
            ->where($academic_params)
            ->orderByDesc('waktu_publish_unix')
            ->limit(2);

        return $academic_news
            ->union($student_news)
            ->union($event_news)
            ->get()
            ->map($mapToViewsItem);
    }

    function listOfAlbumUrls()
    {
        /*'SELECT  a.*, GROUP_CONCAT(CONCAT(tahun_upload, "/",f.file_foto,f.thumb, f.ext) SEPARATOR "`") AS foto_thumb,
                  GROUP_CONCAT(CONCAT(tahun_upload, "/",f.file_foto, f.ext) SEPARATOR "`") AS foto
                  FROM tbl_album AS a
                  LEFT JOIN foto AS f ON f.id_album=a.id_album
                  WHERE 1 AND f.hapus=0 AND f.aktif=1 AND tanggal<>"0000-00-00"  AND publish=2 GROUP BY a.id_album
                  ORDER BY tanggal DESC LIMIT ' . escape($perpage) . ',' . escape($offset)*/
    }
}
