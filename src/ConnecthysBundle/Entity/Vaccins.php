<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vaccins
 *
 * @ORM\Table(name="vaccins", indexes={@ORM\Index(name="IDindividu", columns={"IDindividu"}), @ORM\Index(name="IDtype_vaccin", columns={"IDtype_vaccin"})})
 * @ORM\Entity
 */
class Vaccins
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDvaccin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvaccin;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_vaccin", type="integer", nullable=true)
     */
    private $idtypeVaccin;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;



    /**
     * Get idvaccin
     *
     * @return integer
     */
    public function getIdvaccin()
    {
        return $this->idvaccin;
    }

    /**
     * Set idindividu
     *
     * @param integer $idindividu
     *
     * @return Vaccins
     */
    public function setIdindividu($idindividu)
    {
        $this->idindividu = $idindividu;

        return $this;
    }

    /**
     * Get idindividu
     *
     * @return integer
     */
    public function getIdindividu()
    {
        return $this->idindividu;
    }

    /**
     * Set idtypeVaccin
     *
     * @param integer $idtypeVaccin
     *
     * @return Vaccins
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
     * Set date
     *
     * @param string $date
     *
     * @return Vaccins
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
}
