<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BotController
{
    #[Route('/bot', name: 'app_bot')]
    public function index(): Response
    {
        return new Response("Γεια σου! Είμαι το bot του ΗΚΕΛΥ. Πώς μπορώ να βοηθήσω;");
    }
}