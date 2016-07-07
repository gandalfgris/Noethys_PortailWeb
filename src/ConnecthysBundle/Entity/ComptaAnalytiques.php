<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaAnalytiques
 *
 * @ORM\Table(name="compta_analytiques")
 * @ORM\Entity
 */
class ComptaAnalytiques
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDanalytique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idanalytique;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="abrege", type="string", length=200, nullable=true)
     */
    private $abrege;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;



    /**
     * Get idanalytique
     *
     * @return integer
     */
    public function getIdanalytique()
    {
        return $this->idanalytique;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return ComptaAnalytiques
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
     * Set abrege
     *
     * @param string $abrege
     *
     * @return ComptaAnalytiques
     */
    public function setAbrege($abrege)
    {
        $this->abrege = $abrege;

        return $this;
    }

    /**
     * Get abrege
     *
     * @return string
     */
    public function getAbrege()
    {
        return $this->abrege;
    }

    /**
     * Set defaut
     *
     * @param integer $defaut
     *
     * @return ComptaAnalytiques
     */
    public function setDefaut($defaut)
    {
        $this->defaut = $defaut;

        return $this;
    }

    /**
     * Get defaut
     *
     * @return integer
     */
    public function getDefaut()
    {
        return $this->defaut;
    }
}
