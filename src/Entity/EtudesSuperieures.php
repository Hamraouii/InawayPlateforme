<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtudesSuperieures
 *
 * @ORM\Table(name="etudes_superieures", indexes={@ORM\Index(name="ID_CONSEILLER", columns={"ID_CONSEILLER"}), @ORM\Index(name="ID_SECTEUR", columns={"ID_SECTEUR", "ID_CONSEILLER"}), @ORM\Index(name="IDX_9F80D6C7AC31F306", columns={"ID_SECTEUR"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\EtudesSuperieuresRepository")
 */
class EtudesSuperieures
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_ES", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEs;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=200, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="TEL", type="string", length=20, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE", type="string", length=50, nullable=false)
     */
    private $site;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DISCRIPTION", type="text", length=65535, nullable=true)
     */
    private $discription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ACCES", type="string", length=6, nullable=true)
     */
    private $acces;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE", type="string", length=200, nullable=false, options={"default"="assets/images/college.svg"})
     */
    private $image = 'assets/images/college.svg';

    /**
     * @var int
     *
     * @ORM\Column(name="APPROUVE", type="integer", nullable=false)
     */
    private $approuve;

    /**
     * @var \Secteur
     *
     * @ORM\ManyToOne(targetEntity="Secteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_SECTEUR", referencedColumnName="ID_SECTEUR")
     * })
     */
    private $idSecteur;

    /**
     * @var \Conseiller
     *
     * @ORM\ManyToOne(targetEntity="Conseiller")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CONSEILLER", referencedColumnName="ID_CONSEILLER")
     * })
     */
    private $idConseiller;

    public function getIdEs(): ?int
    {
        return $this->idEs;
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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(string $site): self
    {
        $this->site = $site;

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

    public function getAcces(): ?string
    {
        return $this->acces;
    }

    public function setAcces(?string $acces): self
    {
        $this->acces = $acces;

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

    public function getIdSecteur(): ?Secteur
    {
        return $this->idSecteur;
    }

    public function setIdSecteur(?Secteur $idSecteur): self
    {
        $this->idSecteur = $idSecteur;

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
