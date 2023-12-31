<?php

namespace App\Entity;

use App\Repository\ClientAvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientAvisRepository::class)]
class ClientAvis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_publication = null;

    #[ORM\Column(length: 255)]
    private ?string $avis = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?user $id_client = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->date_publication;
    }

    public function setDatePublication(\DateTimeInterface $date_publication): static
    {
        $this->date_publication = $date_publication;

        return $this;
    }

    public function getAvis(): ?string
    {
        return $this->avis;
    }

    public function setAvis(string $avis): static
    {
        $this->avis = $avis;

        return $this;
    }

    public function getIdClient(): ?user
    {
        return $this->id_client;
    }

    public function setIdClient(?user $id_client): static
    {
        $this->id_client = $id_client;

        return $this;
    }
}
