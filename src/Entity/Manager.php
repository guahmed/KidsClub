<?php

namespace App\Entity;

use App\Repository\ManagerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ManagerRepository::class)
 */ 
class Manager extends Personne
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    /**
     * @ORM\OneToMany(targetEntity=Club::class, mappedBy="manager")
     */
    private $club;

    public function __construct()
    {
        $this->club = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return Collection|Club[]
     */
    public function getClub(): Collection
    {
        return $this->club;
    }

    public function addClub(Club $club): self
    {
        if (!$this->club->contains($club)) {
            $this->club[] = $club;
            $club->setManager($this);
        }

        return $this;
    }

    public function removeClub(Club $club): self
    {
        if ($this->club->contains($club)) {
            $this->club->removeElement($club);
            // set the owning side to null (unless already changed)
            if ($club->getManager() === $this) {
                $club->setManager(null);
            }
        }

        return $this;
    }
}
