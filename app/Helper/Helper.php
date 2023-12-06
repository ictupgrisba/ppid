<?php

namespace App\Helper;

abstract class Helper
{
    static function monthAt(int $i): string
    {
        $months = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
        return $months[$i -1];
    }

    static function dateBy(string $datetime): string
    {
        $getDate = explode(" ", $datetime)[0];
        return explode("-", $getDate)[2] ?? 0;
    }
    static function dayBy(string $datetime): string
    {
        $dateTimeRaw = new \DateTime($datetime);
        return $dateTimeRaw->format('w');
    }
    static function monthBy(string $datetime): string
    {
        $dateTimeRaw = new \DateTime($datetime);
        $month = $dateTimeRaw->format('m');
        return self::monthAt($month);
    }
}
