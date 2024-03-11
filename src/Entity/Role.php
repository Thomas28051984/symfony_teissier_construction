<?php

namespace App\Entity;

use App\Repository\RôleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RôleRepository::class)]
class Rôle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $rôle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRôle(): ?string
    {
        return $this->rôle;
    }

    public function setRôle(string $rôle): static
    {
        $this->rôle = $rôle;

        return $this;
    }
}
