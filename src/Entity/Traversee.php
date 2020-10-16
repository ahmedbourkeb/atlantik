<?php

namespace App\Entity;

use App\Repository\TraverseeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TraverseeRepository::class)
 */
class Traversee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $datetraversee;

    /**
     * @ORM\Column(type="time")
     */
    private $heuretraversee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatetraversee(): ?\DateTimeInterface
    {
        return $this->datetraversee;
    }

    public function setDatetraversee(\DateTimeInterface $datetraversee): self
    {
        $this->datetraversee = $datetraversee;

        return $this;
    }

    public function getHeuretraversee(): ?\DateTimeInterface
    {
        return $this->heuretraversee;
    }

    public function setHeuretraversee(\DateTimeInterface $heuretraversee): self
    {
        $this->heuretraversee = $heuretraversee;

        return $this;
    }
}
