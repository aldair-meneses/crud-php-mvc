<?php

declare(strict_types=1);

namespace Aldrick\Mvc\Controller;

use Aldrick\Mvc\Entity\Video;
use Aldrick\Mvc\Repository\VideoRepository;

class NewJsonVideoController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {
        
    }

    public function processaRequisicao(): void
    {
        $request = file_get_contents('php://input');
        $videoData = json_decode($request, true);
        $video = new Video($videoData['url'], $videoData['title']);
        $this->videoRepository->add($video);

        http_response_code(201);
    }
}