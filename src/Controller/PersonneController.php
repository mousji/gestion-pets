<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Entity\Pet;
use App\Repository\PersonneRepository;
use Proxies\__CG__\App\Entity\Personne as EntityPersonne;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends AbstractController
{
    #[Route('/personne', name: 'app_personne')]
    public function personne(PersonneRepository $repository): Response
    {

        $personne = $repository->findAll();
        return $this->render('personne/personne.html.twig', [

            "personne" => $personne

        ]);
    }
    #[Route('/personne/{id}', name: 'app_details_personne')]
    public function detailspersonne(Personne  $personne): Response
    {


        return $this->render('personne/detailspersonne.html.twig', [

            "personne" => $personne
        ]);
    }
}