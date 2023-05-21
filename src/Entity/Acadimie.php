<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acadimie
 *
 * @ORM\Table(name="acadimie")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\AcadimieRepository")
 */
class Acadimie
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_ACADIMIE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAcadimie;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=45, nullable=false)
     */
    private $nom;

    public function getIdAcadimie(): ?int
    {
        return $this->idAcadimie;
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


}
