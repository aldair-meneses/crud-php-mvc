<?php

declare(strict_types=1);

namespace Aldrick\Mvc\Controller;

class LogoutController implements Controller
{
    public function processaRequisicao(): void
    {
        session_destroy();
        header('Location: /login');
    }
}
