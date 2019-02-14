<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ResourceRepository")
 */
class Resource
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $soft;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $alcohol;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $food;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Student", inversedBy="resources")
     */
    private $student_resource;

    public function __construct()
    {
        $this->student_resource = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSoft(): ?string
    {
        return $this->soft;
    }

    public function setSoft(?string $soft): self
    {
        $this->soft = $soft;

        return $this;
    }

    public function getAlcohol(): ?string
    {
        return $this->alcohol;
    }

    public function setAlcohol(?string $alcohol): self
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    public function getFood(): ?string
    {
        return $this->food;
    }

    public function setFood(?string $food): self
    {
        $this->food = $food;

        return $this;
    }

    /**
     * @return Collection|Student[]
     */
    public function getStudentResource(): Collection
    {
        return $this->student_resource;
    }

    public function addStudentResource(Student $studentResource): self
    {
        if (!$this->student_resource->contains($studentResource)) {
            $this->student_resource[] = $studentResource;
        }

        return $this;
    }

    public function removeStudentResource(Student $studentResource): self
    {
        if ($this->student_resource->contains($studentResource)) {
            $this->student_resource->removeElement($studentResource);
        }

        return $this;
    }
}
