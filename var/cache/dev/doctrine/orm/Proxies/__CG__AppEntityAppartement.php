<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Appartement extends \App\Entity\Appartement implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'numappart', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'rue', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'etage', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'typeappart', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'prixLoc', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'prixCharges', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'ascenseur', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'preavis', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'dateLibre', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'cotisation', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'codePostal', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'libelle', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'arrondisseDem', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'proprietaire', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'photo'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'numappart', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'rue', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'etage', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'typeappart', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'prixLoc', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'prixCharges', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'ascenseur', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'preavis', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'dateLibre', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'cotisation', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'codePostal', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'libelle', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'arrondisseDem', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'proprietaire', '' . "\0" . 'App\\Entity\\Appartement' . "\0" . 'photo'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Appartement $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getNumappart()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getNumappart();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumappart', []);

        return parent::getNumappart();
    }

    /**
     * {@inheritDoc}
     */
    public function getRue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRue', []);

        return parent::getRue();
    }

    /**
     * {@inheritDoc}
     */
    public function setRue(string $rue): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRue', [$rue]);

        return parent::setRue($rue);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtage', []);

        return parent::getEtage();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtage(int $etage): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtage', [$etage]);

        return parent::setEtage($etage);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeappart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeappart', []);

        return parent::getTypeappart();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeappart(string $typeappart): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeappart', [$typeappart]);

        return parent::setTypeappart($typeappart);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixLoc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixLoc', []);

        return parent::getPrixLoc();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixLoc(string $prixLoc): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixLoc', [$prixLoc]);

        return parent::setPrixLoc($prixLoc);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixCharges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixCharges', []);

        return parent::getPrixCharges();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixCharges(string $prixCharges): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixCharges', [$prixCharges]);

        return parent::setPrixCharges($prixCharges);
    }

    /**
     * {@inheritDoc}
     */
    public function getAscenseur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAscenseur', []);

        return parent::getAscenseur();
    }

    /**
     * {@inheritDoc}
     */
    public function setAscenseur(bool $ascenseur): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAscenseur', [$ascenseur]);

        return parent::setAscenseur($ascenseur);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreavis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreavis', []);

        return parent::getPreavis();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreavis(bool $prÉavis): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreavis', [$prÉavis]);

        return parent::setPreavis($prÉavis);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateLibre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateLibre', []);

        return parent::getDateLibre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateLibre(\DateTimeInterface $dateLibre): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateLibre', [$dateLibre]);

        return parent::setDateLibre($dateLibre);
    }

    /**
     * {@inheritDoc}
     */
    public function getCotisation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCotisation', []);

        return parent::getCotisation();
    }

    /**
     * {@inheritDoc}
     */
    public function setCotisation(string $cotisation): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCotisation', [$cotisation]);

        return parent::setCotisation($cotisation);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodePostal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodePostal', []);

        return parent::getCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodePostal(int $codePostal): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodePostal', [$codePostal]);

        return parent::setCodePostal($codePostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(string $ville): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', []);

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelle(string $libelle): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', [$libelle]);

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getArrondisseDem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArrondisseDem', []);

        return parent::getArrondisseDem();
    }

    /**
     * {@inheritDoc}
     */
    public function setArrondisseDem(\App\Entity\Arrondissement $arrondisseDem): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArrondisseDem', [$arrondisseDem]);

        return parent::setArrondisseDem($arrondisseDem);
    }

    /**
     * {@inheritDoc}
     */
    public function getProprietaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProprietaire', []);

        return parent::getProprietaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setProprietaire(\App\Entity\Proprietaire $proprietaire): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProprietaire', [$proprietaire]);

        return parent::setProprietaire($proprietaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', []);

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto($photo): \App\Entity\Appartement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', [$photo]);

        return parent::setPhoto($photo);
    }

}
