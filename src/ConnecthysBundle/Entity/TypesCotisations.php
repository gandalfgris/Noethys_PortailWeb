<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesCotisations
 *
 * @ORM\Table(name="types_cotisations")
 * @ORM\Entity
 */
class TypesCotisations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_cotisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeCotisation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="carte", type="integer", nullable=true)
     */
    private $carte;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;

    /**
     * @var string
     *
     * @ORM\Column(name="code_comptable", type="text", length=65535, nullable=true)
     */
    private $codeComptable;



    /**
     * Get idtypeCotisation
     *
     * @return integer
     */
    public function getIdtypeCotisation()
    {
        return $this->idtypeCotisation;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return TypesCotisations
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
     * Set type
     *
     * @param string $type
     *
     * @return TypesCotisations
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set carte
     *
     * @param integer $carte
     *
     * @return TypesCotisations
     */
    public function setCarte($carte)
    {
        $this->carte = $carte;

        return $this;
    }

    /**
     * Get carte
     *
     * @return integer
     */
    public function getCarte()
    {
        return $this->carte;
    }

    /**
     * Set defaut
     *
     * @param integer $defaut
     *
     * @return TypesCotisations
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

    /**
     * Set codeComptable
     *
     * @param string $codeComptable
     *
     * @return TypesCotisations
     */
    public function setCodeComptable($codeComptable)
    {
        $this->codeComptable = $codeComptable;

        return $this;
    }

    /**
     * Get codeComptable
     *
     * @return string
     */
    public function getCodeComptable()
    {
        return $this->codeComptable;
    }
}
