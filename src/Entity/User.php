<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private ?bool $activo = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    /**
     * @var Collection<int, UsuarioProyecto>
     */
    #[ORM\OneToMany(targetEntity: UsuarioProyecto::class, mappedBy: 'usuario')]
    private Collection $usuarioProyectos;

    /**
     * @var Collection<int, Tarea>
     */
    #[ORM\OneToMany(targetEntity: Tarea::class, mappedBy: 'usuario')]
    private Collection $tareas;

    public function __construct()
    {
        $this->usuarioProyectos = new ArrayCollection();
        $this->tareas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function isActivo(): ?bool
    {
        return $this->activo;
    }

    public function setActivo(bool $activo): static
    {
        $this->activo = $activo;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection<int, UsuarioProyecto>
     */
    public function getUsuarioProyectos(): Collection
    {
        return $this->usuarioProyectos;
    }

    public function addUsuarioProyectos(UsuarioProyecto $usuarioProyectos): static
    {
        if (!$this->usuarioProyectos->contains($usuarioProyectos)) {
            $this->usuarioProyectos->add($usuarioProyectos);
            $usuarioProyectos->setUsuario($this);
        }

        return $this;
    }

    public function removeUsuarioProyectos(UsuarioProyecto $usuarioProyectos): static
    {
        if ($this->usuarioProyectos->removeElement($usuarioProyectos)) {
            // set the owning side to null (unless already changed)
            if ($usuarioProyectos->getUsuario() === $this) {
                $usuarioProyectos->setUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tarea>
     */
    public function getTareas(): Collection
    {
        return $this->tareas;
    }

    public function addTarea(Tarea $tarea): static
    {
        if (!$this->tareas->contains($tarea)) {
            $this->tareas->add($tarea);
            $tarea->setUsuario($this);
        }

        return $this;
    }

    public function removeTarea(Tarea $tarea): static
    {
        if ($this->tareas->removeElement($tarea)) {
            // set the owning side to null (unless already changed)
            if ($tarea->getUsuario() === $this) {
                $tarea->setUsuario(null);
            }
        }

        return $this;
    }
}
