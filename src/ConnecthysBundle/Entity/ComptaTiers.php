<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaTiers
 *
 * @ORM\Table(name="compta_tiers", indexes={@ORM\Index(name="IDcode_comptable", columns={"IDcode_comptable"})})
 * @ORM\Entity
 */
class ComptaTiers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtiers", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtiers;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcode_comptable", type="integer", nullable=true)
     */
    private $idcodeComptable;



    /**
     * Get idtiers
     *
     * @return integer
     */
    public function getIdtiers()
    {
        return $this->idtiers;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return ComptaTiers
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
     * Set observations
     *
     * @param string $observations
     *
     * @return ComptaTiers
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set idcodeComptable
     *
     * @param integer $idcodeComptable
     *
     * @return ComptaTiers
     */
    public function setIdcodeComptable($idcodeComptable)
    {
        $this->idcodeComptable = $idcodeComptable;

        return $this;
    }

    /**
     * Get idcodeComptable
     *
     * @return integer
     */
    public function getIdcodeComptable()
    {
        return $this->idcodeComptable;
    }
}
