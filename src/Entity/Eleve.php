<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eleve
 *
 * @ORM\Table(name="eleve", indexes={@ORM\Index(name="ID_NIVEAU", columns={"ID_NIVEAU", "ID_DIRECTION"}), @ORM\Index(name="ID_DIRECTION", columns={"ID_DIRECTION"}), @ORM\Index(name="ID_USER", columns={"ID_USER"}), @ORM\Index(name="IDX_ECA105F7E69761F5", columns={"ID_NIVEAU"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\EleveRepository")
 */
class Eleve
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_ELEVE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEleve;

    /**
     * @var string
     *
     * @ORM\Column(name="CNE", type="string", length=10, nullable=false)
     */
    private $cne;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_USER", referencedColumnName="ID_USER")
     * })
     */
    private $idUser;

    /**
     * @var \Direction
     *
     * @ORM\ManyToOne(targetEntity="Direction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DIRECTION", referencedColumnName="ID_DIRECTION")
     * })
     */
    private $idDirection;

    /**
     * @var \Niveau
     *
     * @ORM\ManyToOne(targetEntity="Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_NIVEAU", referencedColumnName="ID_NIVEAU")
     * })
     */
    private $idNiveau;

    public function getIdEleve(): ?int
    {
        return $this->idEleve;
    }

    public function getCne(): ?string
    {
        return $this->cne;
    }

    public function setCne(string $cne): self
    {
        $this->cne = $cne;

        return $this;
    }

    public function getIdUser(): ?Utilisateur
    {
        return $this->idUser;
    }

    public function setIdUser(?Utilisateur $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdDirection(): ?Direction
    {
        return $this->idDirection;
    }

    public function setIdDirection(?Direction $idDirection): self
    {
        $this->idDirection = $idDirection;

        return $this;
    }

    public function getIdNiveau(): ?Niveau
    {
        return $this->idNiveau;
    }

    public function setIdNiveau(?Niveau $idNiveau): self
    {
        $this->idNiveau = $idNiveau;

        return $this;
    }
}
