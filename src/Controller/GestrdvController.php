<?php

namespace App\Controller;

use App\Entity\Rdv;
use App\Form\RdvType;
use App\Repository\RdvRepository;
use App\Entity\Disponibilite;
use App\Form\DisponibiliteType;
use App\Repository\DisponibiliteRepository;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/gestrdv')]
class GestrdvController extends AbstractController
{
    #[Route('/', name: 'app_gestrdv', methods: ['GET'])]
   
    public function index(RdvRepository $rdvRepository): Response
    {
        return $this->render('gestrdv/index.html.twig', [
            'rdvs' => $rdvRepository->findAll(),
            
        ]);
    }

}
