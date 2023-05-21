<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="ID_CONSEILLER", columns={"ID_CONSEILLER"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\EvenementRepository")
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_EVENEMENT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=200, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="LIEU", type="string", length=100, nullable=false)
     */
    private $lieu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_DEBUT", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_FIN", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DISCRIPTION", type="text", length=65535, nullable=true)
     */
    private $discription;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE", type="string", length=200, nullable=false)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="APPROUVE", type="integer", nullable=false)
     */
    private $approuve;

    /**
     * @var \Conseiller
     *
     * @ORM\ManyToOne(targetEntity="Conseiller")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CONSEILLER", referencedColumnName="ID_CONSEILLER")
     * })
     */
    private $idConseiller;

    public function getIdEvenement(): ?int
    {
        return $this->idEvenement;
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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getDiscription(): ?string
    {
        return $this->discription;
    }

    public function setDiscription(?string $discription): self
    {
        $this->discription = $discription;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getApprouve(): ?int
    {
        return $this->approuve;
    }

    public function setApprouve(int $approuve): self
    {
        $this->approuve = $approuve;

        return $this;
    }

    public function getIdConseiller(): ?Conseiller
    {
        return $this->idConseiller;
    }

    public function setIdConseiller(?Conseiller $idConseiller): self
    {
        $this->idConseiller = $idConseiller;

        return $this;
    }



}
