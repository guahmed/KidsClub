<?php

namespace App\Entity;

use App\Repository\ChildrenRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChildrenRepository::class)
 */
class Children extends Personne
{
    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    /**
     * @ORM\OneToMany(targetEntity=CompteClub::class, mappedBy="enfant", orphanRemoval=true)
     */
    private $compteClubs;

    public function __construct()
    {
        $this->compteClubs = new ArrayCollection();
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
     * @return Collection|CompteClub[]
     */
    public function getCompteClubs(): Collection
    {
        return $this->compteClubs;
    }

    public function addCompteClub(CompteClub $compteClub): self
    {
        if (!$this->compteClubs->contains($compteClub)) {
            $this->compteClubs[] = $compteClub;
            $compteClub->setEnfant($this);
        }

        return $this;
    }

    public function removeCompteClub(CompteClub $compteClub): self
    {
        if ($this->compteClubs->contains($compteClub)) {
            $this->compteClubs->removeElement($compteClub);
            // set the owning side to null (unless already changed)
            if ($compteClub->getEnfant() === $this) {
                $compteClub->setEnfant(null);
            }
        }

        return $this;
    }
}
