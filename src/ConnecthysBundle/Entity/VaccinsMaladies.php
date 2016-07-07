<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaccinsMaladies
 *
 * @ORM\Table(name="vaccins_maladies", indexes={@ORM\Index(name="IDtype_maladie", columns={"IDtype_maladie"}), @ORM\Index(name="IDtype_vaccin", columns={"IDtype_vaccin"})})
 * @ORM\Entity
 */
class VaccinsMaladies
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDvaccins_maladies", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvaccinsMaladies;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_vaccin", type="integer", nullable=true)
     */
    private $idtypeVaccin;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_maladie", type="integer", nullable=true)
     */
    private $idtypeMaladie;



    /**
     * Get idvaccinsMaladies
     *
     * @return integer
     */
    public function getIdvaccinsMaladies()
    {
        return $this->idvaccinsMaladies;
    }

    /**
     * Set idtypeVaccin
     *
     * @param integer $idtypeVaccin
     *
     * @return VaccinsMaladies
     */
    public function setIdtypeVaccin($idtypeVaccin)
    {
        $this->idtypeVaccin = $idtypeVaccin;

        return $this;
    }

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
     * Set idtypeMaladie
     *
     * @param integer $idtypeMaladie
     *
     * @return VaccinsMaladies
     */
    public function setIdtypeMaladie($idtypeMaladie)
    {
        $this->idtypeMaladie = $idtypeMaladie;

        return $this;
    }

    /**
     * Get idtypeMaladie
     *
     * @return integer
     */
    public function getIdtypeMaladie()
    {
        return $this->idtypeMaladie;
    }
}
