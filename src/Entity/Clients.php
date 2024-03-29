<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ClientsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientsRepository::class)]
#[ApiResource]
class Clients
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $lastname = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $login = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $email = null;

    #[ORM\Column]
    private ?int $zammadId = null;

    #[ORM\Column(nullable: true)]
    private ?int $organizationId = null;

    #[ORM\Column(length: 70)]
    private ?string $roles = null;

    #[ORM\Column(length: 70, nullable: true)]
    private ?string $secondRole = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): static
    {
        $this->login = $login;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getZammadId(): ?int
    {
        return $this->zammadId;
    }

    public function setZammadId(int $zammadId): static
    {
        $this->zammadId = $zammadId;

        return $this;
    }

    public function getOrganizationId(): ?int
    {
        return $this->organizationId;
    }

    public function setOrganizationId(?int $organizationId): static
    {
        $this->organizationId = $organizationId;

        return $this;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function setRoles(string $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function getSecondRole(): ?string
    {
        return $this->secondRole;
    }

    public function setSecondRole(?string $secondRole): static
    {
        $this->secondRole = $secondRole;

        return $this;
    }
}
