<?php

namespace App\Controller;

use App\Entity\Niveau;
use App\Entity\Article;
use App\Entity\Acadimie;
use App\Entity\Direction;
use App\Entity\Conseiller;
use App\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\EtudesSuperieures;
use App\Entity\Concours;
use App\Entity\Evenement;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdministrationController extends AbstractController
{
    /**
     * @Route("/admin", name="administration")
     */
    public function index(ManagerRegistry $doctrine)
    {
        $user = $doctrine->getRepository(Utilisateur::class)->findBy(['role' => 'ROLE_CONSEILLER']);
        $conseillers = $doctrine->getRepository(Conseiller::class)->findBy(['idUser' => $user]);
        $publication = $doctrine->getRepository(Article::class)->findBy(['approuve' => '0']);
        $publication1 = $doctrine->getRepository(EtudesSuperieures::class)->findBy(['approuve' => '0']);
        $publication2 = $doctrine->getRepository(Concours::class)->findBy(['approuve' => '0']);
        $publication3 = $doctrine->getRepository(Evenement::class)->findBy(['approuve' => '0']);

        $acadimie = $doctrine->getRepository(Acadimie::class)->findAll();
        //$idaca =$this ->getDoctrine()->getRepository(Acadimie:: class )->find($request->get( 'acadimie' ));
        //$direction =$this ->getDoctrine()->getRepository(Direction:: class )->findByExampleField( $idaca);
        $direction = $doctrine->getRepository(Direction::class)->findAll();
        return $this->render('administration/index.html.twig', [
            'user' => $user,
            'conseillers' => $conseillers,
            'pub' => $publication,
            'pub1' => $publication1,
            'pub2' => $publication2,
            'pub3' => $publication3,
            'acadimie' => $acadimie,
            'direction' => $direction
        ]);
    }

    private function generateUniqueName()
    {
        return md5(uniqid());
    }

    private function getTargetDir()
    {
        return $this->getParameter('people');
    }
    /**
     * @Route("/admin/ajouterconseiller", name="ajouterConseiller")
     */
    public function ajouterConseiller(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $encoder): Response
    {
        // the file
        //$file = $_FILES['avatar'];
       // $file = new UploadedFile($file['tmp_name'], $file['name'], $file['type']);
        $ima = $this->generateUniqueName() . '.' ;//. $file->guessExtension();
      //  $file->move($this->getTargetDir(), $ima);

        $user = new Utilisateur();
        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setEmail($request->get('email'));
        $user->setPassword($request->get('password'));
        // $user->setConfirm($request->get('confirm_password'));
        $user->setCin($request->get('cin'));
        $user->setAvatar($ima);
        $user->setRoles('ROLE_CONSEILLER');
        $user->setDateInscription(new \DateTime());
        $entityManager = $doctrine->getManager();
        $hash = $encoder->hashPassword($user, $user->getPassword());
        $user->setPassword($hash);

        $entityManager->persist($user);

        $direction = $doctrine->getRepository(Direction::class)->find($request->get('direction'));

        $conseiller = new Conseiller();
        $conseiller->setPpr($request->get('ppr'));
        $conseiller->setIdUser($user);
        $conseiller->setIdDirection($direction);
        $entityManager = $doctrine->getManager();
        $entityManager->persist($conseiller);

        $entityManager->flush();
        return $this->redirectToRoute('administration');
    }

    /**
     * @Route("/admin/modifierconseiller/{id}", name="modifierConseiller")
     */
    public function modifierConseiller(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $encoder, $id): Response
    {
        $user = $doctrine->getRepository(Utilisateur::class)->findOneBy(['idUser' => $id]);
        $conseiller = $doctrine->getRepository(Conseiller::class)->findOneBy(['idUser' => $id]);
        // the file
        $file = $_FILES['avatar'];
        $file = new UploadedFile($file['tmp_name'], $file['name'], $file['type']);
        $ima = $this->generateUniqueName() . '.' . $file->guessExtension();
        $file->move($this->getTargetDir(), $ima);

        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setEmail($request->get('email'));
        $user->setPassword($request->get('password'));
        $user->setCin($request->get('cin'));
        $user->setAvatar($ima);
        $user->setRoles('ROLE_CONSEILLER');
        $user->setDateInscription(new \DateTime());
        $entityManager = $doctrine->getManager();
        $hash = $encoder->hashPassword($user, $user->getPassword());
        $user->setPassword($hash);

        $direction = $doctrine->getRepository(Direction::class)->find($request->get('direction'));

        $conseiller->setPpr($request->get('ppr'));
        $conseiller->setIdUser($user);
        $conseiller->setIdDirection($direction);
        $entityManager = $doctrine->getManager();

        $entityManager->flush();
        return $this->redirectToRoute('administration');
    }


    /**
     * @Route("/admin/supprimerconseiller/{id}", name="supprimerConseiller")
     */
    public function supprimerConseiller($id, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $conseiller = $doctrine->getRepository(Conseiller::class)->findOneBy(['idUser' => $id]);
        $utilisateur = $doctrine->getRepository(Utilisateur::class)->findOneBy(['idUser' => $id]);
        $em->remove($conseiller);
        $em->remove($utilisateur);
        $em->flush();

        return $this->redirectToRoute('administration');
    }

    /**
     * @Route("/admin/accepterpublication/{type}/{id}", name="accepterPublication")
     */
    public function accepterpublication($type, $id, ManagerRegistry $doctrine)
    {
        switch ($type) {

            case "article":
                $pub = $doctrine->getRepository(Article::class)->findOneBy(['idArticle' => $id]);
                $pub->setApprouve('1');
                $entityManager = $doctrine->getManager();
                $entityManager->flush();
                break;
            case "es":
                $pub = $doctrine->getRepository(EtudesSuperieures::class)->findOneBy(['idEs' => $id]);
                $pub->setApprouve('1');
                $entityManager = $doctrine->getManager();
                $entityManager->flush();
                break;
            case "concours":
                $pub = $doctrine->getRepository(Concours::class)->findOneBy(['idConcours' => $id]);
                $pub->setApprouve('1');
                $entityManager = $doctrine->getManager();
                $entityManager->flush();
                break;
            case "evenement":
                $pub = $doctrine->getRepository(Evenement::class)->findOneBy(['idEvenement' => $id]);
                $pub->setApprouve('1');
                $entityManager = $doctrine->getManager();
                $entityManager->flush();
                break;
        }

        return $this->redirectToRoute('administration');
    }

    /**
     * @Route("/admin/refuserpublication/{type}/{id}", name="refuserPublication")
     */
    public function refuserpublication($type, $id, ManagerRegistry $doctrine)
    {
        switch ($type) {

            case "article":
                $pub = $doctrine->getRepository(Article::class)->findOneBy(['idArticle' => $id]);
                $pub->setApprouve('2');
                $entityManager = $doctrine->getManager();
                $entityManager->flush();
                break;
            case "es":
                $pub = $doctrine->getRepository(EtudesSuperieures::class)->findOneBy(['idEs' => $id]);
                $pub->setApprouve('2');
                $entityManager = $doctrine->getManager();
                $entityManager->flush();
                break;
            case "concours":
                $pub = $doctrine->getRepository(Concours::class)->findOneBy(['idConcours' => $id]);
                $pub->setApprouve('2');
                $entityManager = $doctrine->getManager();
                $entityManager->flush();
                break;
            case "evenement":
                $pub = $doctrine->getRepository(Evenement::class)->findOneBy(['idEvenement' => $id]);
                $pub->setApprouve('2');
                $entityManager = $doctrine->getManager();
                $entityManager->flush();
                break;
        }

        return $this->redirectToRoute('administration');
    }
}
