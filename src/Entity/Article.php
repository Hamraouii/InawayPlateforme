<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="ID_USER", columns={"ID_CONSEILLER"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_ARTICLE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE", type="text", length=65535, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTENU", type="text", length=65535, nullable=false)
     */
    private $contenu;

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

    public function getIdArticle(): ?int
    {
        return $this->idArticle;
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

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

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
