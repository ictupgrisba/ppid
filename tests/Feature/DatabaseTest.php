<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    public function testDatabaseConnection()
    {
        $connection = DB::connection()->getPdo();

        self::assertNotNull($connection);
    }

}
