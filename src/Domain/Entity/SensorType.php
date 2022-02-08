<?php

namespace App\Domain\Entity;

use App\Infrastructure\Repository\SensorTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SensorTypeRepository::class)
 */
class SensorType
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
     * @ORM\OneToMany(targetEntity="App\Domain\Entity\Sensor", mappedBy="sensorType")
     */
    private $sensors;

    public function __construct()
    {
        $this->sensors = new ArrayCollection();
    }

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
     * @return ArrayCollection
     */
    public function getSensors(): ArrayCollection
    {
        return $this->sensors;
    }

    /**
     * @param Sensor $sensor
     */
    public function addSensors(Sensor $sensor): void
    {
        $this->sensors->add($sensor);
    }
}
