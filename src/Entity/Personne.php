<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonneRepository::class)
 */
abstract class  Personne
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
    protected $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $lastName;

    /**
     * @ORM\Column(type="integer")
     */
    protected $age;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $telphone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $adress;

       /**
     * @ORM\Column(type="string", length=255)
     */
    protected $govermnet;

    /**
     * @ORM\Column(type="integer")
     */
    protected $postalCode;




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

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getTelphone(): ?string
    {
        return $this->telphone;
    }

    public function setTelphone(string $telphone): self
    {
        $this->telphone = $telphone;

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


}
