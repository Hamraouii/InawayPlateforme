<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concours
 *
 * @ORM\Table(name="concours", indexes={@ORM\Index(name="ID_CONSEILLER", columns={"ID_CONSEILLER"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ConcoursRepository")
 */
class Concours
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_CONCOURS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConcours;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE", type="string", length=200, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="LIEU", type="string", length=200, nullable=false)
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DISCRIPTION", type="text", length=65535, nullable=true)
     */
    private $discription;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=true)
     */
    private $date;

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

    public function getIdConcours(): ?int
    {
        return $this->idConcours;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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

    public function getDiscription(): ?string
    {
        return $this->discription;
    }

    public function setDiscription(?string $discription): self
    {
        $this->discription = $discription;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

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
