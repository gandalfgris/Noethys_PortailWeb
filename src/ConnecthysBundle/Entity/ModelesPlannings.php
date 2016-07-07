<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelesPlannings
 *
 * @ORM\Table(name="modeles_plannings")
 * @ORM\Entity
 */
class ModelesPlannings
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmodele", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodele;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="donnees", type="text", length=65535, nullable=true)
     */
    private $donnees;



    /**
     * Get idmodele
     *
     * @return integer
     */
    public function getIdmodele()
    {
        return $this->idmodele;
    }

    /**
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return ModelesPlannings
     */
    public function setIdactivite($idactivite)
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    /**
     * Get idactivite
     *
     * @return integer
     */
    public function getIdactivite()
    {
        return $this->idactivite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return ModelesPlannings
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
     * Set donnees
     *
     * @param string $donnees
     *
     * @return ModelesPlannings
     */
    public function setDonnees($donnees)
    {
        $this->donnees = $donnees;

        return $this;
    }

    /**
     * Get donnees
     *
     * @return string
     */
    public function getDonnees()
    {
        return $this->donnees;
    }
}
