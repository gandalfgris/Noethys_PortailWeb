<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NiveauxScolaires
 *
 * @ORM\Table(name="niveaux_scolaires")
 * @ORM\Entity
 */
class NiveauxScolaires
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDniveau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idniveau;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;

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
     * Get idniveau
     *
     * @return integer
     */
    public function getIdniveau()
    {
        return $this->idniveau;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return NiveauxScolaires
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
     * Set nom
     *
     * @param string $nom
     *
     * @return NiveauxScolaires
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
     * @return NiveauxScolaires
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
}
