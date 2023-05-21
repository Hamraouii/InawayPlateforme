<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="ID_USER", columns={"ID_USER"}), @ORM\Index(name="ID_QUESTION", columns={"ID_QUESTION"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_REPENSE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRepense;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CONTENU", type="text", length=65535, nullable=true)
     */
    private $contenu;

    /**
     * @var \Sujet
     *
     * @ORM\ManyToOne(targetEntity="Sujet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_QUESTION", referencedColumnName="ID_QUESTION")
     * })
     */
    private $idQuestion;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_USER", referencedColumnName="ID_USER")
     * })
     */
    private $idUser;

    public function getIdRepense(): ?int
    {
        return $this->idRepense;
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

    public function getIdQuestion(): ?Sujet
    {
        return $this->idQuestion;
    }

    public function setIdQuestion(?Sujet $idQuestion): self
    {
        $this->idQuestion = $idQuestion;

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


}
