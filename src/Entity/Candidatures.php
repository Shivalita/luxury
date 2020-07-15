<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidatures
 *
 * @ORM\Table(name="candidatures")
 * @ORM\Entity
 */
class Candidatures
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_candidate", type="integer", nullable=false)
     */
    private $idCandidate;

    /**
     * @var int
     *
     * @ORM\Column(name="id_offer", type="integer", nullable=false)
     */
    private $idOffer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=false)
     */
    private $datetime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCandidate(): ?int
    {
        return $this->idCandidate;
    }

    public function setIdCandidate(int $idCandidate): self
    {
        $this->idCandidate = $idCandidate;

        return $this;
    }

    public function getIdOffer(): ?int
    {
        return $this->idOffer;
    }

    public function setIdOffer(int $idOffer): self
    {
        $this->idOffer = $idOffer;

        return $this;
    }

    public function getDatetime(): ?\DateTimeInterface
    {
        return $this->datetime;
    }

    public function setDatetime(\DateTimeInterface $datetime): self
    {
        $this->datetime = $datetime;

        return $this;
    }


}
