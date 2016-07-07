<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupes
 *
 * @ORM\Table(name="groupes")
 * @ORM\Entity
 */
class Groupes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDgroupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="abrege", type="string", length=100, nullable=true)
     */
    private $abrege;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_inscrits_max", type="integer", nullable=true)
     */
    private $nbreInscritsMax;



    /**
     * Get idgroupe
     *
     * @return integer
     */
    public function getIdgroupe()
    {
        return $this->idgroupe;
    }

    /**
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return Groupes
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
     * @return Groupes
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
     * @return Groupes
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
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return Groupes
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set nbreInscritsMax
     *
     * @param integer $nbreInscritsMax
     *
     * @return Groupes
     */
    public function setNbreInscritsMax($nbreInscritsMax)
    {
        $this->nbreInscritsMax = $nbreInscritsMax;

        return $this;
    }

    /**
     * Get nbreInscritsMax
     *
     * @return integer
     */
    public function getNbreInscritsMax()
    {
        return $this->nbreInscritsMax;
    }
}
