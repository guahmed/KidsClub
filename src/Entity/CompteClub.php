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
     * @ORM\ManyToOne(targetEntity=Children::class,fetch="EAGER", inversedBy="compteClubs")
     * @ORM\JoinColumn()
     */
    private $enfant;

    /**
     * @ORM\ManyToOne(targetEntity=Club::class,fetch="EAGER", inversedBy="compteClubs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $club;

    /**
     * @ORM\Column(type="integer")
     */
    private $monthlyBill;

    /**
     * @ORM\Column(type="string")
     */
    private $paymentStatus;


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

    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(string $paymentStatus): self
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }
}
