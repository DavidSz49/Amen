<?php

namespace App\Entity;

use App\Repository\ProveedorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProveedorRepository::class)
 */
class Proveedor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Nombre;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Correo;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Telefono;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Tipo;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Estado;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Creado;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Editado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getCorreo(): ?string
    {
        return $this->Correo;
    }

    public function setCorreo(string $Correo): self
    {
        $this->Correo = $Correo;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }

    public function setTelefono(string $Telefono): self
    {
        $this->Telefono = $Telefono;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->Tipo;
    }

    public function setTipo(string $Tipo): self
    {
        $this->Tipo = $Tipo;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->Estado;
    }

    public function setEstado(string $Estado): self
    {
        $this->Estado = $Estado;

        return $this;
    }

    public function getCreado(): ?\DateTimeInterface
    {
        return $this->Creado;
    }

    public function setCreado(\DateTimeInterface $Creado): self
    {
        $this->Creado = $Creado;

        return $this;
    }

    public function getEditado(): ?\DateTimeInterface
    {
        return $this->Editado;
    }

    public function setEditado(\DateTimeInterface $Editado): self
    {
        $this->Editado = $Editado;

        return $this;
    }
}
