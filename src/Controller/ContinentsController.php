<?php

namespace App\Controller;

use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContinentsController extends AbstractController
{
    #[Route('/continents', name: 'app_continents')]
    public function displayListContinents(ContinentRepository $repository): Response
    {
        $continent = $repository->findAll();
        return $this->render(
            'continents/continent.html.twig',
            [
                "continent" => $continent
            ]

        );
    }
}