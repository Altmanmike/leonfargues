<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class FilmController extends AbstractController
{
    #[Route('/film/{id}', name: 'app_film')]
    public function index(FilmRepository $repoF, $id): Response
    {
        $film = $repoF->find($id);
        
        return $this->render('film/index.html.twig', [
            'controller_name' => 'FilmController',
            'film' => $film
        ]);
    }
}