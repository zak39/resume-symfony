<?php

namespace App\Controller;

use App\Service\UpdaterCv;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CvController extends AbstractController
{
    public function __construct(
        private UpdaterCv $updater
    )
    {
    }
    
    #[Route('/', name: 'app_cv')]
    public function index(): Response
    {
        $projectDir = $this->getParameter('kernel.project_dir');
        
        $json = file_get_contents($projectDir . '/import/cv.json');

        $cv = json_decode($json, true);

        $cv = $this->updater->addSocialNetworks($cv);
        $cv = $this->updater->updateSkills($cv);
        $cv = $this->updater->addProProject($cv);
        $cv = $this->updater->addSideProject($cv);
        $cv = $this->updater->addSummary($cv);
        $cv = $this->updater->addPseudo($cv);

        return $this->render('cv/index.html.twig', [
            'cv' => $cv,
        ]);
    }
}
