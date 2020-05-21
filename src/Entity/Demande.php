<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="DEMANDE", indexes={@ORM\Index(name="I_FK_DEMANDE_CLIENT", columns={"ID"})})
 * @ORM\Entity
 */
class Demande
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUM_DEM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numDem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPE_DEM", type="string", length=10, nullable=true)
     */
    private $typeDem;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLE_DEM", type="string", length=30, nullable=true)
     */
    private $villeDem;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_LIMITE", type="date", nullable=true)
     */
    private $dateLimite;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Arrondissement", mappedBy="numDem")
     */
    private $arrondisseDem;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->arrondisseDem = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getNumDem()
    {
        return $this->numDem;
    }

    public function getTypeDem()
    {
        return $this->typeDem;
    }

    public function setTypeDem(string $typeDem): self
    {
        $this->typeDem = $typeDem;

        return $this;
    }
    
    public function getVilleDem()
    {
        return $this->villeDem;
    }

    public function setVilleDem(string $villeDem): self
    {
        $this->villeDem = $villeDem;

        return $this;
    }

    public function getDateLimite()
    {
        return $this->dateLimite;
    }

    public function setDateLimite(\DateTimeInterface $dateLimite): self
    {
        $this->dateLimite = $dateLimite;

        return $this;
    }

    public function getId(): Client
    {
        return $this->id;
    }

    public function setId(Client $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return Collection|Arrondissement[]
     */
    public function getArrondisseDem(): Collection
    {
        return $this->arrondisseDem;
    }

    public function addArrondisseDem(Arrondissement $arrondisseDem): self
    {
        if (!$this->arrondisseDem->contains($arrondisseDem)) {
            $this->arrondisseDem[] = $arrondisseDem;
            $arrondisseDem->addNumDem($this);
        }

        return $this;
    }

    public function removeArrondisseDem(Arrondissement $arrondisseDem): self
    {
        if ($this->arrondisseDem->contains($arrondisseDem)) {
            $this->arrondisseDem->removeElement($arrondisseDem);
            $arrondisseDem->removeNumDem($this);
        }

        return $this;
    }

}