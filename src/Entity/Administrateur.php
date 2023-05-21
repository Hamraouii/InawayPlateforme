<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 *
 * @ORM\Table(name="administrateur", indexes={@ORM\Index(name="ID_CONSEILLER", columns={"ID_CONSEILLER"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\AdministrateurRepository")
 */
class Administrateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_ADMIN", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdmin;

    /**
     * @var \Conseiller
     *
     * @ORM\ManyToOne(targetEntity="Conseiller")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CONSEILLER", referencedColumnName="ID_CONSEILLER")
     * })
     */
    private $idConseiller;

    public function getIdAdmin(): ?int
    {
        return $this->idAdmin;
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
