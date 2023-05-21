<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sujet
 *
 * @ORM\Table(name="sujet", indexes={@ORM\Index(name="ID_THEME", columns={"ID_THEME"}), @ORM\Index(name="ID_USER", columns={"ID_USER"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\SujetRepository")
 */
class Sujet
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_QUESTION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE", type="text", length=65535, nullable=false)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CONTENU", type="text", length=65535, nullable=true)
     */
    private $contenu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

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
     * @var \Theme
     *
     * @ORM\ManyToOne(targetEntity="Theme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_THEME", referencedColumnName="ID_THEME")
     * })
     */
    private $idTheme;

    public function getIdQuestion(): ?int
    {
        return $this->idQuestion;
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

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getIdTheme(): ?Theme
    {
        return $this->idTheme;
    }

    public function setIdTheme(?Theme $idTheme): self
    {
        $this->idTheme = $idTheme;

        return $this;
    }


}
