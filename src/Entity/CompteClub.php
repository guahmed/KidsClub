<?php

namespace App\Entity;

use App\Repository\CompteClubRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteClubRepository::class)
 */
class CompteClub
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Children::class, inversedBy="compteClubs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $enfant;

    /**
     * @ORM\ManyToOne(targetEntity=Club::class, inversedBy="compteClubs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $club;

    /**
     * @ORM\Column(type="integer")
     */
    private $monthlyBill;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnfant(): ?Children
    {
        return $this->enfant;
    }

    public function setEnfant(?Children $enfant): self
    {
        $this->enfant = $enfant;

        return $this;
    }

    public function getClub(): ?Club
    {
        return $this->club;
    }

    public function setClub(?Club $club): self
    {
        $this->club = $club;

        return $this;
    }

    public function getMonthlyBill(): ?int
    {
        return $this->monthlyBill;
    }

    public function setMonthlyBill(int $monthlyBill): self
    {
        $this->monthlyBill = $monthlyBill;

        return $this;
    }
}
