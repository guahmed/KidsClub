<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClubRepository::class)
 */
class Club
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;


    /**
     * @ORM\ManyToMany(targetEntity=Categorie::class)
     */
    private $categorie;

    /**
     * @ORM\OneToMany(targetEntity=CompteClub::class, mappedBy="club", orphanRemoval=true)
     */
    private $compteClubs;

        /**
     * @ORM\ManyToOne(targetEntity=Manager::class, inversedBy="club")
     * @ORM\JoinColumn()
     */
    private $manager;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $govermnet;

    /**
     * @ORM\Column(type="integer")
     */
    private $postalCode;

    public function getGovermnet(): ?string
    {
        return $this->govermnet;
    }

    public function setGovermnet(string $govermnet): self
    {
        $this->govermnet = $govermnet;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->postalCode;
    }

    public function SetPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }
    





    public function __construct()
    {
        $this->categorie = new ArrayCollection();
        $this->compteClubs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

 



    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }


    /**
     * @return Collection|Categorie[]
     */
    public function getCategorie(): Collection
    {
        return $this->categorie;
    }

    public function addCategorie(Categorie $categorie): self
    {
        if (!$this->categorie->contains($categorie)) {
            $this->categorie[] = $categorie;
        }

        return $this;
    }

    public function removeCategorie(Categorie $categorie): self
    {
        if ($this->categorie->contains($categorie)) {
            $this->categorie->removeElement($categorie);
        }

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
            $compteClub->setClub($this);
        }

        return $this;
    }

    public function removeCompteClub(CompteClub $compteClub): self
    {
        if ($this->compteClubs->contains($compteClub)) {
            $this->compteClubs->removeElement($compteClub);
            // set the owning side to null (unless already changed)
            if ($compteClub->getClub() === $this) {
                $compteClub->setClub(null);
            }
        }

        return $this;
    }

    public function getManager(): ?Manager
    {
        return $this->manager;
    }

    public function setManager(?Manager $manager): self
    {
        $this->manager = $manager;

        return $this;
    }
}
