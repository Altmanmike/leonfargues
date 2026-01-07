<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use App\Repository\RealisateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class RechercherController extends AbstractController
{
    #[Route('/rechercher', name: 'app_rechercher')]
    public function index(FilmRepository $repoF, RealisateurRepository $repoR, Request $request): Response
    {        
        $data = $request->getContent();
        //dd($data);
        
        if ($repoR->findBy( [ 'nom' => $data ] )) {
            $realisateur = $repoR->findOneBy( [ 'nom' => $data ] );
            $films = $realisateur->getFilms();
            
            return $this->render('rechercher/index.html.twig', [
                'controller_name' => 'RechercherController',
                'film' => $films[0]
            ]);
        }
                 
        $film = $repoF->findOneBy( [ 'titre' => $data ] );
        
        return $this->render('rechercher/index.html.twig', [
            'controller_name' => 'RechercherController',
            'film' => $film
        ]);
    }
}