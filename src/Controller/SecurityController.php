<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Niveau;
use App\Entity\Acadimie;
use App\Entity\Direction;
use App\Entity\Utilisateur;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/connexion", name="connexion")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();


        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }


    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(Request $request, ManagerRegistry $doctrine)
    {
        $niveau = $doctrine->getRepository(Niveau::class)->findAll();
        $acadimie = $doctrine->getRepository(Acadimie::class)->findAll();
        //$idaca =$this ->getDoctrine()->getRepository(Acadimie:: class )->find($request->get( 'acadimie' ));
        //$direction =$this ->getDoctrine()->getRepository(Direction:: class )->findByExampleField( $idaca);
        $direction = $doctrine->getRepository(Direction::class)->findAll();
        return $this->render('security/singup.html.twig', [
            'niveau' => $niveau,
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
     * @Route("/inscription/ajouter", name="ajouterUser")
     */
    public function ajouterUser(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $encoder): Response
    {
        // the file
        $file = $_FILES['avatar'];
        if (!empty($file['tmp_name'])) {
            $file = new UploadedFile($file['tmp_name'], $file['name'], $file['type']);
            $ima = $this->generateUniqueName() . '.' . $file->guessExtension();
            $file->move($this->getTargetDir(), $ima);
        } else {
            $ima = ""; // Set the default value for the avatar field if no file is uploaded
        }

        $user = new Utilisateur();
        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setEmail($request->get('email'));
        $user->setPassword($request->get('password'));
        // $user->setConfirm($request->get('confirm_password'));
        $user->setCin($request->get('cin'));
        $user->setAvatar($ima);
        $user->setRoles('ROLE_ELEVE');
        $user->setDateInscription(new \DateTime());
        $entityManager = $doctrine->getManager();
        $hash = $encoder->hashPassword($user, $user->getPassword());
        $user->setPassword($hash);

        $entityManager->persist($user);

        $niveau = $doctrine->getRepository(Niveau::class)->find($request->get('niveau'));
        $direction = $doctrine->getRepository(Direction::class)->find($request->get('direction'));

        $eleve = new Eleve();
        $eleve->setCne($request->get('cne'));
        $eleve->setIdUser($user);
        $eleve->setIdNiveau($niveau);
        $eleve->setIdDirection($direction);
        $entityManager = $doctrine->getManager();
        $entityManager->persist($eleve);

        $entityManager->flush();
        return $this->redirectToRoute('connexion');
    }


    /**
     * @Route("/deconnexion", name="logout")
     */
    public function logout()
    { }
}
