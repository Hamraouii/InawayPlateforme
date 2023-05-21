<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direction
 *
 * @ORM\Table(name="direction", indexes={@ORM\Index(name="ID_ACADIMIE", columns={"ID_ACADIMIE"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\DirectionRepository")
 */
class Direction
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_DIRECTION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDirection;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var \Acadimie
     *
     * @ORM\ManyToOne(targetEntity="Acadimie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ACADIMIE", referencedColumnName="ID_ACADIMIE")
     * })
     */
    private $idAcadimie;

    public function getIdDirection(): ?int
    {
        return $this->idDirection;
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

    public function getIdAcadimie(): ?Acadimie
    {
        return $this->idAcadimie;
    }

    public function setIdAcadimie(?Acadimie $idAcadimie): self
    {
        $this->idAcadimie = $idAcadimie;

        return $this;
    }


}
