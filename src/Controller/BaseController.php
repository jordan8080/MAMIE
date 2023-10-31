<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AjoutCafeType;
use App\Repository\TypecafeRepository;

class BaseController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', []);
    }

    #[Route('/ajoutCafe', name: 'app_ajout_cafe')]
    public function contact(): Response
    {
        $form = $this->createForm(AjoutCafeType::class);
        $this->addFlash('notice', 'Message envoyé');
        return $this->render('base/ajout_cafe.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/private-liste-cafes', name: 'app_liste_cafes')]
    public function listeCafes(TypecafeRepository $typecafeRepository): Response
    {
        $cafes = $typecafeRepository->findAll();
        return $this->render('base/liste-cafes.html.twig', [
            'cafes' => $cafes
        ]);
    }
}
