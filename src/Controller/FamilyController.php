<?php

namespace App\Controller;

use App\Repository\FamilyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FamilyController extends AbstractController
{
    #[Route('/family', name: 'app_family')]
    public function index(FamilyRepository $repository): Response
    {

        $family = $repository->findAll();
        return $this->render('family/family.html.twig', [
            "family" => $family
        ]);
    }
}