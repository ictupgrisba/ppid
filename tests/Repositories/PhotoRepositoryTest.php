<?php

namespace Tests\Repositories;

use App\Repositories\PhotoRepository;
use Tests\TestCase;

class PhotoRepositoryTest extends TestCase
{
    private PhotoRepository $repository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new PhotoRepository();
    }

    public function testCollectExtDirFiles()
    {
        $listOfUploadedFiles = $this->repository->listOfUploadedFiles();
        self::assertNotCount(0, $listOfUploadedFiles);
    }
}
