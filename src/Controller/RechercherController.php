<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RechercherController extends AbstractController
{
    #[Route('/rechercher', name: 'app_rechercher')]
    public function index(FilmRepository $repoF/*, $val*/): Response
    {
        $film = $repoF->find(1);
        //$film = $repoF->findOneBy([ $val ]);
        //$film = [ 'dfdffdg'];
        //dd($film);
        
        return $this->render('rechercher/index.html.twig', [
            'controller_name' => 'RechercherController',
            'film' => $film
        ]);
    }
}