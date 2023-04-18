<?php

declare(strict_types=1);

return [
    'GET|/' => \Aldrick\Mvc\Controller\VideoListController::class,
    'GET|/novo-video' => \Aldrick\Mvc\Controller\VideoFormController::class,
    'POST|/novo-video' => \Aldrick\Mvc\Controller\NewVideoController::class,
    'GET|/editar-video' => \Aldrick\Mvc\Controller\VideoFormController::class,
    'POST|/editar-video' => \Aldrick\Mvc\Controller\EditVideoController::class,
    'GET|/remover-video' => \Aldrick\Mvc\Controller\DeleteVideoController::class,
    'GET|/login' => \Aldrick\Mvc\Controller\LoginFormController::class,
    'POST|/login' => \Aldrick\Mvc\Controller\LoginController::class,
    'GET|/logout' => \Aldrick\Mvc\Controller\LogoutController::class,
    'GET|/videos-json' => \Aldrick\Mvc\Controller\JsonVideoListController::class,
    'POST/videos' => \Aldrick\Mvc\Controller\NewJsonVideoController::class
];
