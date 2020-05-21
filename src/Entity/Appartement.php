<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartement
 *
 * @ORM\Table(name="APPARTEMENT", indexes={@ORM\Index(name="I_FK_APPARTEMENT_ARRONDISSEMENT", columns={"ARRONDISSE_DEM"}), @ORM\Index(name="IDX_FCA52F65FCD1D0C6", columns={"PROPRIETAIRE"}), @ORM\Index(name="I_FK_APPARTEMENT_PROPRIETAIRE", columns={"NUMAPPART"})})
 * @ORM\Entity
 */
class Appartement
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUMAPPART", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numappart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RUE", type="string", length=50, nullable=true)
     */
    private $rue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ETAGE", type="integer", nullable=true)
     */
    private $etage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPEAPPART", type="string", length=10, nullable=true)
     */
    private $typeappart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRIX_LOC", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $prixLoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRIX_CHARGES", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $prixCharges;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASCENSEUR", type="boolean", nullable=true)
     */
    private $ascenseur;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="PRÉAVIS", type="boolean", nullable=true)
     */
    private $preavis;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_LIBRE", type="date", nullable=true)
     */
    private $dateLibre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COTISATION", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cotisation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="code_postal", type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville", type="string", length=30, nullable=true)
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var \Arrondissement
     *
     * @ORM\ManyToOne(targetEntity="Arrondissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ARRONDISSE_DEM", referencedColumnName="ARRONDISSE_DEM")
     * })
     */
    private $arrondisseDem;

    /**
     * @var \Proprietaire
     *
     * @ORM\ManyToOne(targetEntity="Proprietaire", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PROPRIETAIRE", referencedColumnName="ID")
     * })
     */
    private $proprietaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    public function getNumappart()
    {
        return $this->numappart;
    }

    public function getRue()
    {
        return $this->rue;
    }

    public function setRue(string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getEtage()
    {
        return $this->etage;
    }

    public function setEtage(int $etage): self
    {
        $this->etage = $etage;

        return $this;
    }

    public function getTypeappart()
    {
        return $this->typeappart;
    }

    public function setTypeappart(string $typeappart): self
    {
        $this->typeappart = $typeappart;

        return $this;
    }

    public function getPrixLoc()
    {
        return $this->prixLoc;
    }

    public function setPrixLoc(string $prixLoc): self
    {
        $this->prixLoc = $prixLoc;

        return $this;
    }

    public function getPrixCharges()
    {
        return $this->prixCharges;
    }

    public function setPrixCharges(string $prixCharges): self
    {
        $this->prixCharges = $prixCharges;

        return $this;
    }

    public function getAscenseur()
    {
        return $this->ascenseur;
    }

    public function setAscenseur(bool $ascenseur): self
    {
        $this->ascenseur = $ascenseur;

        return $this;
    }

    public function getPreavis()
    {
        return $this->preavis;
    }

    public function setPreavis(bool $prÉavis): self
    {
        $this->preavis = $prÉavis;

        return $this;
    }
    
    public function __construct()
    {
        $this->dateLibre = new \DateTime();
    }

    public function getDateLibre()
    {
        return $this->dateLibre;
    }

    public function setDateLibre(\DateTimeInterface $dateLibre): self
    {
        $this->dateLibre = $dateLibre;

        return $this;
    }

    public function getCotisation()
    {
        return $this->cotisation;
    }

    public function setCotisation(string $cotisation): self
    {
        $this->cotisation = $cotisation;

        return $this;
    }

    public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getArrondisseDem()
    {
        return $this->arrondisseDem;
    }

    public function setArrondisseDem(Arrondissement $arrondisseDem): self
    {
        $this->arrondisseDem = $arrondisseDem;

        return $this;
    }

    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    public function setProprietaire(Proprietaire $proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }


}