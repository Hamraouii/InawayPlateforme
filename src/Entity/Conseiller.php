<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conseiller
 *
 * @ORM\Table(name="conseiller", indexes={@ORM\Index(name="ID_DIRECTION", columns={"ID_DIRECTION"}), @ORM\Index(name="ID_USER", columns={"ID_USER"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ConseillerRepository")
 */
class Conseiller
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_CONSEILLER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConseiller;

    /**
     * @var string
     *
     * @ORM\Column(name="PPR", type="string", length=7, nullable=false)
     */
    private $ppr;

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

    public function getIdConseiller(): ?int
    {
        return $this->idConseiller;
    }

    public function getPpr(): ?string
    {
        return $this->ppr;
    }

    public function setPpr(string $ppr): self
    {
        $this->ppr = $ppr;

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

    public function __toString()
    {
        return (string) $this->idUser;
    }

}
