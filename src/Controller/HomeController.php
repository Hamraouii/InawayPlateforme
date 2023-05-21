<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Entity\EtudesSuperieures;
use App\Entity\Evenement;
use App\Entity\Concours;
use App\Entity\Sujet;
use App\Entity\Theme;
use App\Entity\Utilisateur;
use App\Entity\Commentaire;
use App\Entity\Article;
use App\Entity\Niveau;
use App\Entity\Acadimie;
use App\Entity\Direction;
use App\Entity\Eleve;
use Doctrine\Persistence\ManagerRegistry;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function index(Request $request, ManagerRegistry $doctrine)
    {
        $news = $doctrine->getRepository(Article::class)->getLatest();
        $niveau = $doctrine->getRepository(Niveau::class)->findAll();
        $acadimie = $doctrine->getRepository(Acadimie::class)->findAll();
        //$idaca =$this ->getdoctrine->getRepository(Acadimie:: class )->find($request->get( 'acadimie' ));
        //$direction =$this ->getdoctrine->getRepository(Direction:: class )->findByExampleField( $idaca);
        $direction = $doctrine->getRepository(Direction::class)->findAll();
        return $this->render('index.html.twig', ['news' => $news, 'niveau' => $niveau, 'acadimie' => $acadimie, 'direction' => $direction]);
    }

    /**
     * @Route("/concours", name="cnc")
     */
    public function cnc(ManagerRegistry $doctrine)
    {
        $direction = $doctrine->getRepository(Direction::class)->findAll();
        $niveau = $doctrine->getRepository(Niveau::class)->findAll();
        $acadimie = $doctrine->getRepository(Acadimie::class)->findAll();
        $cnc = $doctrine->getRepository(Concours::class)->getLatest();
        return $this->render('index.html.twig', ['cnc' => $cnc, 'niveau' => $niveau, 'acadimie' => $acadimie, 'direction' => $direction]);
    }

    /**
     * @Route("/evenements", name="eve")
     */
    public function eve(ManagerRegistry $doctrine)
    {
        $niveau = $doctrine->getRepository(Niveau::class)->findAll();
        $acadimie = $doctrine->getRepository(Acadimie::class)->findAll();
        $direction = $doctrine->getRepository(Direction::class)->findAll();
        $eve = $doctrine->getRepository(Evenement::class)->getLatest();
        return $this->render('index.html.twig', ['eve' => $eve, 'niveau' => $niveau, 'acadimie' => $acadimie, 'direction' => $direction]);
    }

    /**
     * @Route("/etudes_superieures", name="es")
     */
    public function es(ManagerRegistry $doctrine)
    {
        $niveau = $doctrine->getRepository(Niveau::class)->findAll();
        $acadimie = $doctrine->getRepository(Acadimie::class)->findAll();
        $direction = $doctrine->getRepository(Direction::class)->findAll();
        $es = $doctrine->getRepository(EtudesSuperieures::class)->getLatest();
        return $this->render('index.html.twig', ['es' => $es, 'niveau' => $niveau, 'acadimie' => $acadimie, 'direction' => $direction]);
    }

    /**
     * @Route("/lycee", name="lycee")
     */
    public function lycee()
    {
        return $this->render('lycee.html.twig');
    }

    /**
     * @Route("/forum", name="forum")
     */
    public function forum(ManagerRegistry $doctrine)
    {
        // $user = $doctrine->getRepository(Sujet::class)->findOneBy(['idUser' => $this->getUser()]);
        $sujet = $doctrine->getRepository(Sujet::class)->getLatest();
        $theme = $doctrine->getRepository(Theme::class)->findAll();

        return $this->render('forum.html.twig', ['sujet' => $sujet, 'theme' => $theme]);
    }

    /**
     * @Route("/forum_answer/{id}", name="answer")
     */
    public function forum_answer($id, ManagerRegistry $doctrine)
    {
        $nbrCommentaire = $doctrine->getRepository(Commentaire::class)->count(['idQuestion' => $id]);
        $sujet = $doctrine->getRepository(Sujet::class)->findOneBy(['idQuestion' => $id]);
        $commentaire = $doctrine->getRepository(Commentaire::class)->findBy(['idQuestion' => $id]);
        $user = $this->getUser();
        return $this->render('forum_answer.html.twig', [
            'commentaire' => $commentaire,
            'sujet' => $sujet,
            'nbrCommentaire' => $nbrCommentaire,
            'user' => $user
        ]);
    }


    // voir plus

    /**
     * @Route("/plus", name="plus")
     */
    public function plus(ManagerRegistry $doctrine)
    {
        $news_plus = $doctrine->getRepository(Article::class)->findBy(['approuve' => 1]);
        return $this->render('voirPlus.html.twig', ['news_plus' => $news_plus]);
    }

    /**
     * @Route("/plus/concours", name="cnc_plus")
     */
    public function cnc_plus(ManagerRegistry $doctrine)
    {
        $cnc_plus = $doctrine->getRepository(Concours::class)->findBy(['approuve' => 1]);
        return $this->render('voirPlus.html.twig', ['cnc_plus' => $cnc_plus]);
    }

    /**
     * @Route("/plus/evenements", name="eve_plus")
     */
    public function eve_plus(ManagerRegistry $doctrine)
    {
        $eve_plus = $doctrine->getRepository(Evenement::class)->findBy(['approuve' => 1]);
        return $this->render('voirPlus.html.twig', ['eve_plus' => $eve_plus]);
    }

    /**
     * @Route("/plus/etudes_superieures", name="es_plus")
     */
    public function es_plus(ManagerRegistry $doctrine)
    {
        $es_plus = $doctrine->getRepository(EtudesSuperieures::class)->findBy(['approuve' => 1]);
        return $this->render('voirPlus.html.twig', ['es_plus' => $es_plus]);
    }

    /**
     * @Route("/forum_plus", name="forum_plus")
     */
    public function forum_plus(ManagerRegistry $doctrine)
    {
        $sujet_plus = $doctrine->getRepository(Sujet::class)->findAll();
        $theme = $doctrine->getRepository(Theme::class)->findAll();;
        return $this->render('voirPlusForum.html.twig', ['sujet_plus' => $sujet_plus, 'theme' => $theme]);
    }
    // END voir plus 


    /**
     * @Route("/forum/ajouter", name="question")
     */
    public function ajouterSujet(Request $request, ManagerRegistry $doctrine): Response
    {
        $theme = $doctrine->getRepository(Theme::class)->find($request->get('theme'));
        $user = $this->getUser();

        $sujet = new Sujet();
        $sujet->setTitre($request->get('titre'));
        $sujet->setContenu($request->get('question'));
        $sujet->setIdtheme($theme);
        $sujet->setIduser($user);
        $sujet->setDate(new \DateTime());
        $entityManager = $doctrine->getManager();
        $entityManager->persist($sujet);
        $entityManager->flush();
        return $this->redirectToRoute('forum');
    }

    /**
     * @Route("/forum_answer/ajouter/{id}", name="ajouterAnswer")
     */
    public function ajouterAnswer(Request $request, $id, ManagerRegistry $doctrine): Response
    {
        $sujet = $doctrine->getRepository(Sujet::class)->findOneBy(['idQuestion' => $id]);
        $question = $doctrine->getRepository(Sujet::class)->find($request->get('question'));
        $user = $this->getUser();

        $commentaire = new Commentaire();
        $commentaire->setContenu($request->get('comment'));
        $commentaire->setIduser($user);
        $commentaire->setIdquestion($question);
        $entityManager = $doctrine->getManager();
        $entityManager->persist($commentaire);
        $entityManager->flush();
        return $this->redirectToRoute('answer', ['id' => $id]);
    }
}
