<?php

namespace App\Repositories;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use TheSeer\Tokenizer\Exception;

class PhotoRepository
{
    private Client $client;
    public function __construct()
    {
        $this->client = new Client();
    }
    function listOfUploadedFiles(): array
    {
        try {
            $endpoint = "https://upgrisba.ac.id/api/photos";
            $response = $this->client->get($endpoint);
            $contents = $response->getBody()->getContents();
            $contents = json_decode($contents);
            $contents = array_unique($contents);

            Log::debug(json_encode($contents));
            return $contents;

        } catch (\Throwable $throwable){

            Log::debug($throwable->getMessage());
            return [];
        }
    }

    /*function listOfUploadedFiles()
    {
        $dirPath = 'assets/media/'. date('y') . '/' . str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT) . '/';
        $files = scandir($dirPath);
        $result = [];
        $threshold = 10;

        if(count($files) < 1) {
            $this->listOfUploadedFiles();
            return;
        }
        for ($i = 0; $i < count($files); $i++) {
            if ($i > $threshold) break;

            $filePath = $dirPath . '/' . $files[$i];
            if (is_file($filePath)) {

                $result[] = base_url(). $dirPath . $files[$i];
            }
        }
        header('Content-Type: application/json');
        echo json_encode($result);
    }*/
}
