<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostRepository
{
    function listOfPublishedScheduleWith(int $limit): Collection|array
    {
        $params = [
            ['content_type', '=', 4],
            ['status_publish', '=', 2]
        ];
        return Post::query()
            ->where($params)
            ->orderBy('tanggal_agenda')
            ->limit($limit)
            ->get();
    }
}
