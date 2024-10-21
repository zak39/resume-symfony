<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CvController extends AbstractController
{
    #[Route('/', name: 'app_cv')]
    public function index(): Response
    {
        $projectDir = $this->getParameter('kernel.project_dir');
        
        $json = file_get_contents($projectDir . '/import/cv.json');

        $cv = json_decode($json, true);

        return $this->render('cv/index.html.twig', [
            'cv' => $cv,
        ]);
    }
}
