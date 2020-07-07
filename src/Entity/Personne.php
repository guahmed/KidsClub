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
     * @ORM\ManyToOne(targetEntity=ZoneGeo::class)
     * @ORM\JoinColumn(nullable=false)
     */
    protected $zoneGeo;

    protected function getId(): ?int
    {
        return $this->id;
    }

    protected function getName(): ?string
    {
        return $this->name;
    }

    protected function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    protected function getLastName(): ?string
    {
        return $this->lastName;
    }

    protected function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    protected function getAge(): ?int
    {
        return $this->age;
    }

    protected function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    protected function getTelphone(): ?string
    {
        return $this->telphone;
    }

    protected function setTelphone(string $telphone): self
    {
        $this->telphone = $telphone;

        return $this;
    }

    protected function getAdress(): ?string
    {
        return $this->adress;
    }

    protected function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    protected function getZoneGeo(): ?ZoneGeo
    {
        return $this->zoneGeo;
    }

    protected function setZoneGeo(?ZoneGeo $zoneGeo): self
    {
        $this->zoneGeo = $zoneGeo;

        return $this;
    }
}
