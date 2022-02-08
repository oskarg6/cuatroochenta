<?php

namespace App\Domain\Entity;

use App\Infrastructure\Repository\SensorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SensorRepository::class)
 */
class Sensor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=false)
     */
    private $name;

    /**
     * @ORM\Column(type="float", unique=false)
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="App\Domain\Entity\SensorType", inversedBy="sensors")
     */
    private $sensorType;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    /**
     * @return SensorType
     */
    public function getSensorType(): SensorType
    {
        return $this->sensorType;
    }

    /**
     * @param SensorType $sensorType
     *
     * @return $this
     */
    public function setSensorType(SensorType $sensorType): self
    {
        $this->sensorType = $sensorType;

        return $this;
    }
}
