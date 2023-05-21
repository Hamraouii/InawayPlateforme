<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Niveau;
use App\Entity\Utilisateur;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class EleveController extends AbstractController
{
    /**
     * @Route("/eleve", name="eleve")
     */
    public function index()
    {
        return $this->render('eleve/index.html.twig');
    }

    /**
     * @Route("/eleve/profil", name="profile")
     */
    public function profile(ManagerRegistry $doctrine)
    {
        $this->denyAccessUnlessGranted('ROLE_ELEVE');
        $user = $this->getUser();
        $eleve = $doctrine->getRepository(Eleve::class)->findOneBy(['idUser' => $user]);
        $niveau = $doctrine->getRepository(Niveau::class)->findAll();

        return $this->render('eleve/profil.html.twig', [
            'user' => $user,
            'eleve' => $eleve,
            'niveau' => $niveau

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
     * @Route("/eleve/profil/update/{id}", name="modifierProfile")
     */
    public function modifierProfile($id, ManagerRegistry $doctrine, UserPasswordHasherInterface $encoder, Request $request)
    {
        $user = $doctrine->getRepository(Utilisateur::class)->findOneBy(['idUser' => $id]);
        $eleve = $doctrine->getRepository(Eleve::class)->findOneBy(['idUser' => $id]);

        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setEmail($request->get('email'));
        $user->setPassword($request->get('pass'));
        $user->setDateInscription(new \DateTime());
        $entityManager = $doctrine->getManager();
        $hash = $encoder->hashPassword($user, $user->getPassword());
        $user->setPassword($hash);


        $eleve->setCne($request->get('cne'));
        $eleve->setIdUser($user);
        $entityManager = $doctrine->getManager();

        $entityManager->flush();
        return $this->redirectToRoute('profile');
    }

    /**
     * @Route("/eleve/profil/updateAvatar/{id}", name="modifierAvatar")
     */
    public function modifierAvatar($id,  Request $request, ManagerRegistry $doctrine)
    {
        $user = $doctrine->getRepository(Utilisateur::class)->findOneBy(['idUser' => $id]);
        // the file
        $file = $_FILES['avatar'];
        $file = new UploadedFile($file['tmp_name'], $file['name'], $file['type']);
        $ima = $this->generateUniqueName() . '.' . $file->guessExtension();
        $file->move($this->getTargetDir(), $ima);
        $user->setAvatar($ima);

        $entityManager = $doctrine->getManager();

        $entityManager->flush();
        return $this->redirectToRoute('profile');
    }
}
