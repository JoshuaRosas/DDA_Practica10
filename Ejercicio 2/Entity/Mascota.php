<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mascota
 *
 * @ORM\Table(name="mascota")
 * @ORM\Entity
 */
class Mascota
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=3, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="text", length=65535, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="propietario", type="text", length=65535, nullable=false)
     */
    private $propietario;

    /**
     * @var string
     *
     * @ORM\Column(name="especie", type="text", length=65535, nullable=false)
     */
    private $especie;

    /**
     * @var string
     *
     * @ORM\Column(name="raza", type="text", length=65535, nullable=false)
     */
    private $raza;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $sexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=false)
     */
    private $fechaNacimiento;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_muerte", type="date", nullable=true)
     */
    private $fechaMuerte;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getPropietario(): ?string
    {
        return $this->propietario;
    }

    public function setPropietario(string $propietario): self
    {
        $this->propietario = $propietario;

        return $this;
    }

    public function getEspecie(): ?string
    {
        return $this->especie;
    }

    public function setEspecie(string $especie): self
    {
        $this->especie = $especie;

        return $this;
    }

    public function getRaza(): ?string
    {
        return $this->raza;
    }

    public function setRaza(string $raza): self
    {
        $this->raza = $raza;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(\DateTimeInterface $fechaNacimiento): self
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getFechaMuerte(): ?\DateTimeInterface
    {
        return $this->fechaMuerte;
    }

    public function setFechaMuerte(?\DateTimeInterface $fechaMuerte): self
    {
        $this->fechaMuerte = $fechaMuerte;

        return $this;
    }


}
