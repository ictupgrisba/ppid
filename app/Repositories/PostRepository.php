<?php

namespace App\Repositories;

use App\Helper\Helper;
use App\Models\Photo;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;

class PostRepository
{
    function listOfPublishedScheduleWith(int $limit): Collection|array
    {
        $params = [
            ['content_type', '=', 4],
            ['status_publish', '=', 2]
        ];
        $mapToViewsItem = function($item){
            $item['title'] = Helper::dateBy($item['tanggal_agenda']);
            $item['month'] = Helper::monthBy($item['tanggal_agenda']);
            return $item;
        };
        return Post::query()
            ->where($params)
            ->orderBy('tanggal_agenda')
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
            ->limit(2)
            ->union($event_news);

        $mapToViewsItem = function($item){
            // $item['description'] = explode(' ', $item['judul_berita']);
            $base_url = asset('assets/media/' . $item['photo']['tahun_upload'] . '/' . $item['photo']['file_foto'] . $item['photo']['thumb'] . $item['photo']['ext']);
            $item['img_url'] = $base_url;
            // Log::debug($item);
            return $item;
        };
        // Log::debug("isModelRelated = ". Post::query()->getRelation('photo')->get());
        return Post::query()
            ->where($academic_params)
            ->orderByDesc('waktu_publish_unix')
            ->limit(2)
            ->union($student_news)
            ->get()
            ->map($mapToViewsItem);
    }
}
