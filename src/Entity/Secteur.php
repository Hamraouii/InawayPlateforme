<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteur
 *
 * @ORM\Table(name="secteur")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\SecteurRepository")
 */
class Secteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_SECTEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=30, nullable=false)
     */
    private $nom;

    public function getIdSecteur(): ?int
    {
        return $this->idSecteur;
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
    public  function  __toString(): string
    {
        // TODO: Implement __toString() method.
        return $this->getIdSecteur() .''. $this->getNom();
    }


}
