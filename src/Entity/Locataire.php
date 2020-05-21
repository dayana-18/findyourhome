<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locataire
 *
 * @ORM\Table(name="LOCATAIRE", uniqueConstraints={@ORM\UniqueConstraint(name="I_FK_LOCATAIRE_APPARTEMENT", columns={"NUMAPPART"})})
 * @ORM\Entity
 */
class Locataire
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="R_I_B", type="integer", nullable=true)
     */
    private $RIB;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TEL_BANQUE", type="integer", nullable=true)
     */
    private $telBanque;

    /**
     * @var \Utilisateur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;

    /**
     * @var \Appartement
     *
     * @ORM\ManyToOne(targetEntity="Appartement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMAPPART", referencedColumnName="NUMAPPART")
     * })
     */
    private $numappart;

    public function getRIB()
    {
        return $this->RIB;
    }

    public function setRIB(int $RIB): self
    {
        $this->RIB = $RIB;

        return $this;
    }

    public function getTelBanque()
    {
        return $this->telBanque;
    }

    public function setTelBanque(int $telBanque): self
    {
        $this->telBanque = $telBanque;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(Utilisateur $id): self
    {
        $this->id = $id;

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


}