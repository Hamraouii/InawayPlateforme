<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 * @UniqueEntity(
 *  fields= {"cin"},
 *  message= "le CIN que vous avez indiqué est déjà utilisé !"
 * )
 * @UniqueEntity(
 *  fields= {"email"},
 *  message= "l\'email que vous avez indiqué est déjà utilisé !"
 * )
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_USER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=50, nullable=false)
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire minimum 8 caractères")
     * @ORM\Column(name="MDP", type="string", length=250, nullable=false)
     */
    private $mdp;

    /**
     * 
     * @Assert\EqualTo(propertyPath="mdp",message="Votre mot de passe n\'est pas le même")
     */
    private $confirm_mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=45, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="CIN", type="string", length=8, nullable=true)
     */
    private $cin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_INSCRIPTION", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateInscription = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="AVATAR", type="string", length=200, nullable=true, options={"default"="assets/images/people/110/guy-1.jpg"})
     */
    private $avatar;

    /**
     * @ORM\Column(type="string", length=50 , nullable = true)
     */
    private $role;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->mdp;
    }

    public function setPassword(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getConfirm(): ?string
    {
        return $this->confirm_mdp;
    }

    public function setConfirm(string $confirm_mdp): self
    {
        $this->confirm_mdp = $confirm_mdp;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(\DateTimeInterface $dateInscription): self
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getRoles(): array
    {
        return [
            $this->role,
        ];
    }

    public function setRoles(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function __toString()
    {
        $fullname = $this->getPrenom() . ' ' . $this->getNom();
        return (string)$fullname;
    }

    public function eraseCredentials()
    { }
    public function getSalt()
    { }
    public function getUsername(): ?string
    {
        return $this->email;
    }

    public function getUserIdentifier(): string{
        return (string) $this->email;
    }
}
