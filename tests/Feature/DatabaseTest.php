<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
