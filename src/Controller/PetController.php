<?php

namespace App\Controller;

use App\Entity\Pet;
use App\Repository\PetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PetController extends AbstractController
{
    #[Route('/', name: 'app_pet')]
    public function index(PetRepository $repository): Response
    {


        $pet = $repository->findAll();
        return $this->render('pet/index.html.twig', [
            "pet" => $pet
        ]);
    }

    #[Route('/display/{id}', name: 'app_display')]
    public function display(Pet $p)
    {





        return $this->render('pet/display.html.twig', [
            "p" => $p
        ]);
    }
}