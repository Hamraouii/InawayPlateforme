<?php

namespace App\Controller;

use App\Entity\Acadimie;
use App\Entity\Article;
use App\Entity\Direction;
use App\Entity\Niveau;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeaderController extends AbstractController
{
    #[Route('/header', name: 'app_header')]
    public function index(Request  $request, ManagerRegistry $doctrine)
    {
        $news = $doctrine->getRepository(Article::class)->getLatest();
        $niveau = $doctrine->getRepository(Niveau::class)->findAll();
        $acadimie = $doctrine->getRepository(Acadimie::class)->findAll();
        //$idaca =$this ->getdoctrine->getRepository(Acadimie:: class )->find($request->get( 'acadimie' ));
        //$direction =$this ->getdoctrine->getRepository(Direction:: class )->findByExampleField( $idaca);
        $direction = $doctrine->getRepository(Direction::class)->findAll();
        return $this->render('header/index.html.twig', ['news' => $news, 'niveau' => $niveau, 'acadimie' => $acadimie, 'direction' => $direction]);
    }
}
