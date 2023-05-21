<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau
 *
 * @ORM\Table(name="niveau")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\NiveauRepository")
 */
class Niveau
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_NIVEAU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNiveau;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=45, nullable=false)
     */
    private $nom;

    public function getIdNiveau(): ?int
    {
        return $this->idNiveau;
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
    public function __toString()
    {
        return (string)$this->getNom();
    }
}
