<?php

namespace App\Entity;

use App\Repository\AccesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccesRepository::class)
 */
class Acces
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=utilisateur::class, inversedBy="acces")
     */
    private $utilisateurid;

    /**
     * @ORM\ManyToOne(targetEntity=document::class, inversedBy="acces")
     */
    private $documentid;

    /**
     * @ORM\ManyToOne(targetEntity=autorisation::class, inversedBy="acces")
     */
    private $autorisationid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurid(): ?utilisateur
    {
        return $this->utilisateurid;
    }

    public function setUtilisateurid(?utilisateur $utilisateurid): self
    {
        $this->utilisateurid = $utilisateurid;

        return $this;
    }

    public function getDocumentid(): ?document
    {
        return $this->documentid;
    }

    public function setDocumentid(?document $documentid): self
    {
        $this->documentid = $documentid;

        return $this;
    }

    public function getAutorisationid(): ?autorisation
    {
        return $this->autorisationid;
    }

    public function setAutorisationid(?autorisation $autorisationid): self
    {
        $this->autorisationid = $autorisationid;

        return $this;
    }
}
