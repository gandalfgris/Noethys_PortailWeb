<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesVaccins
 *
 * @ORM\Table(name="types_vaccins")
 * @ORM\Entity
 */
class TypesVaccins
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_vaccin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeVaccin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_validite", type="string", length=50, nullable=true)
     */
    private $dureeValidite;



    /**
     * Get idtypeVaccin
     *
     * @return integer
     */
    public function getIdtypeVaccin()
    {
        return $this->idtypeVaccin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return TypesVaccins
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set dureeValidite
     *
     * @param string $dureeValidite
     *
     * @return TypesVaccins
     */
    public function setDureeValidite($dureeValidite)
    {
        $this->dureeValidite = $dureeValidite;

        return $this;
    }

    /**
     * Get dureeValidite
     *
     * @return string
     */
    public function getDureeValidite()
    {
        return $this->dureeValidite;
    }
}
