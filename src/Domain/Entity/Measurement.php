<?php

namespace App\Domain\Entity;

use App\Infrastructure\Repository\MeasurementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MeasurementRepository::class)
 */
class Measurement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $year;

    /**
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * @ORM\Column(type="string")
     */
    private $color;

    /**
     * @ORM\Column(type="string")
     */
    private $variety;

    /**
     * @ORM\Column(type="float")
     */
    private $temperature;

    /**
     * @ORM\Column(type="float")
     */
    private $graduation;

    /**
     * @ORM\Column(type="float")
     */
    private $ph;

    /**
     * @ORM\Column(type="text")
     */
    private $observations;

    /**
     * @ORM\Column(type="string")
     */
    private $wine;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getVariety(): string
    {
        return $this->variety;
    }

    /**
     * @param string $variety
     */
    public function setVariety(string $variety): void
    {
        $this->variety = $variety;
    }

    /**
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * @param float $temperature
     */
    public function setTemperature(float $temperature): void
    {
        $this->temperature = $temperature;
    }

    /**
     * @return float
     */
    public function getGraduation(): float
    {
        return $this->graduation;
    }

    /**
     * @param float $graduation
     */
    public function setGraduation(float $graduation): void
    {
        $this->graduation = $graduation;
    }

    /**
     * @return float
     */
    public function getPh(): float
    {
        return $this->ph;
    }

    /**
     * @param float $ph
     */
    public function setPh(float $ph): void
    {
        $this->ph = $ph;
    }

    /**
     * @return string
     */
    public function getObservations(): string
    {
        return $this->observations;
    }

    /**
     * @param string $observations
     */
    public function setObservations(string $observations): void
    {
        $this->observations = $observations;
    }

    /**
     * @return string
     */
    public function getWine(): string
    {
        return $this->wine;
    }

    /**
     * @param string $wine
     */
    public function setWine(string $wine): void
    {
        $this->wine = $wine;
    }
}
