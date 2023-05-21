<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theme
 *
 * @ORM\Table(name="theme")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ThemeRepository")
 */
class Theme
{

    /**
     * @var int
     *
     * @ORM\Column(name="ID_THEME", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTheme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=45, nullable=true)
     */
    private $nom;

    
    public function getIdTheme(): ?int
    {
        return $this->idTheme;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
    
    public function __toString()
    {
        return (string) $this->getNom();
    }

}
