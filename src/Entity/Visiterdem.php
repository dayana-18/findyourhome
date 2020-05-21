<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visiterdem
 *
 * @ORM\Table(name="visiterdem", indexes={@ORM\Index(name="FK_VISI_CLIENT", columns={"numappart"}), @ORM\Index(name="FK_VISITER_CLIENT", columns={"id"})})
 * @ORM\Entity
 */
class Visiterdem
{
    /**
     * @var int
     *
     * @ORM\Column(name="numvisite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numvisite;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datevisite", type="date", nullable=true)
     */
    private $datevisite;

    /**
     * @var \Appartement
     *
     * @ORM\ManyToOne(targetEntity="Appartement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numappart", referencedColumnName="NUMAPPART")
     * })
     */
    private $numappart;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="ID")
     * })
     */
    private $id;

    public function getNumvisite()
    {
        return $this->numvisite;
    }

    public function getDatevisite()
    {
        return $this->datevisite;
    }

    public function setDatevisite(\DateTimeInterface $datevisite): self
    {
        $this->datevisite = $datevisite;

        return $this;
    }

    public function getNumappart()
    {
        return $this->numappart;
    }

    public function setNumappart(Appartement $numappart): self
    {
        $this->numappart = $numappart;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(Client $id): self
    {
        $this->id = $id;

        return $this;
    }


}
