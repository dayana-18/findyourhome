<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Arrondissement
 *
 * @ORM\Table(name="ARRONDISSEMENT")
 * @ORM\Entity
 */
class Arrondissement
{
    /**
     * @var int
     *
     * @ORM\Column(name="ARRONDISSE_DEM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $arrondisseDem;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Demande", inversedBy="arrondisseDem")
     * @ORM\JoinTable(name="concerner",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ARRONDISSE_DEM", referencedColumnName="ARRONDISSE_DEM")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="NUM_DEM", referencedColumnName="NUM_DEM")
     *   }
     * )
     */
    private $numDem;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numDem = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getArrondisseDem(): int
    {
        return $this->arrondisseDem;
    }

    /**
     * @return Collection|Demande[]
     */
    public function getNumDem(): Collection
    {
        return $this->numDem;
    }

    public function addNumDem(Demande $numDem): self
    {
        if (!$this->numDem->contains($numDem)) {
            $this->numDem[] = $numDem;
        }

        return $this;
    }

    public function removeNumDem(Demande $numDem): self
    {
        if ($this->numDem->contains($numDem)) {
            $this->numDem->removeElement($numDem);
        }

        return $this;
    }

}