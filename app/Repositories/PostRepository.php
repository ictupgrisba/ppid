<?php

namespace App\Repositories;

class PostRepository
{
    function listOfScheduleBy()
    {
        $query = "SELECT * FROM post WHERE content_type=4 AND status_publish=2 ORDER BY tanggal_agenda DESC LIMIT 6";
    }
}
