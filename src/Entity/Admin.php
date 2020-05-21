<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="ADMIN")
 * @ORM\Entity
 */
class Admin
{
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

    public function getId(): Utilisateur
    {
        return $this->id;
    }

    public function setId(Utilisateur $id): self
    {
        $this->id = $id;

        return $this;
    }


}