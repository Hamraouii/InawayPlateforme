<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Secteur;
use App\Entity\Acadimie;
use App\Entity\Concours;
use App\Entity\Direction;
use App\Entity\Evenement;
use App\Form\ArticleType;
use App\Entity\Conseiller;
use App\Form\ConcoursType;
use App\Form\EvenementType;
use App\Entity\EtudesSuperieures;
use App\Form\EtudesSuperieuresType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ConseillerController extends AbstractController
{
    /**
     * @Route("/conseiller", name="conseiller")
     */
    public function index(ManagerRegistry $doctrine)
    {
        $secteur = $doctrine->getRepository(Secteur::class)->findAll();
        return $this->render(
            'conseiller/index.html.twig',
            [
                'secteur' => $secteur
            ]
        );
    }

    /**
     * @Route("/conseiller/profil", name="profil")
     */
    public function profil(ManagerRegistry $doctrine)
    {
        $this->denyAccessUnlessGranted('ROLE_CONSEILLER');
        $user = $this->getUser();
        $conseiller = $doctrine->getRepository(Conseiller::class)->findOneBy(['idUser' => $user]);
        return $this->render('conseiller/profil.html.twig', [
            'user' => $user,
            'conseiller' => $conseiller
        ]);
    }


    private function generateUniqueName()
    {
        return md5(uniqid());
    }

    private function getTargetDir()
    {
        return $this->getParameter('images');
    }

    /**
     * @Route("/conseiller/publier/{type}", name="publier")
     */
    public function publier($type, Request $request, ManagerRegistry $doctrine)
    {
        switch ($type) {
            case "article":
            {
                // the file
                $file = $_FILES['image'];
                $file = new UploadedFile($file['tmp_name'], $file['name'], $file['type']);
                $ima = $this->generateUniqueName() . '.' . $file->guessExtension();
                $file->move($this->getTargetDir(), $ima);

                $article = new Article();
                $article->setTitre($request->get('titre'));
                $article->setContenu($request->get('contenu'));
                $article->setApprouve(0);
                $user = $this->getUser();
                $conseiller = $doctrine->getRepository(Conseiller::class)->findOneBy(['idUser' => $user]);
                $article->setIdConseiller($conseiller);
                $article->setImage($ima);
                $entityManager = $doctrine->getManager();

                $entityManager->persist($article);
                $entityManager->flush();
            }

            case "evenement":
            {
                // the file
                $file = $_FILES['image'];
                $file = new UploadedFile($file['tmp_name'], $file['name'], $file['type']);
                $ima = $this->generateUniqueName() . '.' . $file->guessExtension();
                $file->move($this->getTargetDir(), $ima);

                $evenement = new Evenement();
                $evenement->setNom($request->get('nom'));
                $evenement->setLieu($request->get('lieu'));
                $evenement->setDateDebut(new \DateTime($request->get('debut')));
                $evenement->setDateFin(new \DateTime($request->get('fin')));
                $evenement->setDiscription($request->get('disc'));
                $evenement->setApprouve(0);
                $user = $this->getUser();
                $conseiller = $doctrine->getRepository(Conseiller::class)->findOneBy(['idUser' => $user]);
                $evenement->setIdConseiller($conseiller);
                $evenement->setImage($ima);
                $entityManager = $doctrine->getManager();

                $entityManager->persist($evenement);
                $entityManager->flush();
            }

            case "etudes_superieures":
            {
                // the file
                $file = $_FILES['image'];
                $file = new UploadedFile($file['tmp_name'], $file['name'], $file['type']);
                $ima = $this->generateUniqueName() . '.' . $file->guessExtension();
                $file->move($this->getTargetDir(), $ima);

                $es = new EtudesSuperieures();
                $es->setNom($request->get('nom'));
                $es->setAdresse($request->get('adr'));
                $es->setTel($request->get('tel'));
                $es->setAcces($request->get('acces'));
                $es->setSite($request->get('site'));
                $idsecteur = $request->get('secteur');
                $secteur = $doctrine->getRepository(Secteur::class)->findOneBy(['idSecteur' => $idsecteur]);
                $es->setIdSecteur($secteur);
                $es->setDiscription($request->get('disc'));
                $es->setApprouve(0);
                $user = $this->getUser();
                $conseiller = $doctrine->getRepository(Conseiller::class)->findOneBy(['idUser' => $user]);
                $es->setIdConseiller($conseiller);
                $es->setImage($ima);
                $entityManager = $doctrine->getManager();

                $entityManager->persist($es);
                $entityManager->flush();
            }

            case "concours":
            {
                // the file
                $file = $_FILES['image'];
                $file = new UploadedFile($file['tmp_name'], $file['name'], $file['type']);
                $ima = $this->generateUniqueName() . '.' . $file->guessExtension();
                $file->move($this->getTargetDir(), $ima);

                $concours = new Concours();
                $concours->setTitre($request->get('titre'));
                $concours->setLieu($request->get('lieu'));
                $concours->setDiscription($request->get('disc'));
                $concours->setDate(new \DateTime($request->get('date')));
                $concours->setApprouve(0);
                $user = $this->getUser();
                $conseiller = $doctrine->getRepository(Conseiller::class)->findOneBy(['idUser' => $user]);
                $concours->setIdConseiller($conseiller);
                $concours->setImage($ima);
                $entityManager = $doctrine->getManager();

                $entityManager->persist($concours);
                $entityManager->flush();
            }
        }
        return $this->redirectToRoute('conseiller');
    }

    /**
     * @Route("/conseiller/modifier/{type}", name="modifier")
     */
    public function modifier($type, Request $request)
    {
        switch ($type) {
            case "article":
            {
                $article = new Article;
            }

            case "evenement":
            {
                $evenement = new Evenement;
            }

            case "etudes_superieures":
            {
                $es = new EtudesSuperieures;
            }

            case "concours":
            {
                $concours = new Concours;
            }
        }
        return $this->render('conseiller/index.html.twig');
    }
}
