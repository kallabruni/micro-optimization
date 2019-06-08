<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Result
 *
 * @ORM\Table(name="result", indexes={@ORM\Index(name="id", columns={"id_result"})})
 * @ORM\Entity
 */
class Result
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="time1", type="integer", nullable=false)
     */
    private $time1;

    /**
     * @var int
     *
     * @ORM\Column(name="time2", type="integer", nullable=false)
     */
    private $time2;

    /**
     * @var string
     *
     * @ORM\Column(name="php_version", type="string", length=200, nullable=false)
     */
    private $phpVersion;

    /**
     * @var \Test
     *
     * @ORM\ManyToOne(targetEntity="Test")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_result", referencedColumnName="id")
     * })
     */
    private $idResult;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTime1(): ?int
    {
        return $this->time1;
    }

    public function setTime1(int $time1): self
    {
        $this->time1 = $time1;

        return $this;
    }

    public function getTime2(): ?int
    {
        return $this->time2;
    }

    public function setTime2(int $time2): self
    {
        $this->time2 = $time2;

        return $this;
    }

    public function getPhpVersion(): ?string
    {
        return $this->phpVersion;
    }

    public function setPhpVersion(string $phpVersion): self
    {
        $this->phpVersion = $phpVersion;

        return $this;
    }

    public function getIdResult(): ?Test
    {
        return $this->idResult;
    }

    public function setIdResult(?Test $idResult): self
    {
        $this->idResult = $idResult;

        return $this;
    }


}
