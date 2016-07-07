<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quotients
 *
 * @ORM\Table(name="quotients", indexes={@ORM\Index(name="IDfamille", columns={"IDfamille"}), @ORM\Index(name="IDtype_quotient", columns={"IDtype_quotient"})})
 * @ORM\Entity
 */
class Quotients
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDquotient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquotient;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=10, nullable=true)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string", length=10, nullable=true)
     */
    private $dateFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotient", type="integer", nullable=true)
     */
    private $quotient;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var float
     *
     * @ORM\Column(name="revenu", type="float", precision=10, scale=0, nullable=true)
     */
    private $revenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_quotient", type="integer", nullable=true)
     */
    private $idtypeQuotient;



    /**
     * Get idquotient
     *
     * @return integer
     */
    public function getIdquotient()
    {
        return $this->idquotient;
    }

    /**
     * Set idfamille
     *
     * @param integer $idfamille
     *
     * @return Quotients
     */
    public function setIdfamille($idfamille)
    {
        $this->idfamille = $idfamille;

        return $this;
    }

    /**
     * Get idfamille
     *
     * @return integer
     */
    public function getIdfamille()
    {
        return $this->idfamille;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Quotients
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     *
     * @return Quotients
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set quotient
     *
     * @param integer $quotient
     *
     * @return Quotients
     */
    public function setQuotient($quotient)
    {
        $this->quotient = $quotient;

        return $this;
    }

    /**
     * Get quotient
     *
     * @return integer
     */
    public function getQuotient()
    {
        return $this->quotient;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return Quotients
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
     * Set revenu
     *
     * @param float $revenu
     *
     * @return Quotients
     */
    public function setRevenu($revenu)
    {
        $this->revenu = $revenu;

        return $this;
    }

    /**
     * Get revenu
     *
     * @return float
     */
    public function getRevenu()
    {
        return $this->revenu;
    }

    /**
     * Set idtypeQuotient
     *
     * @param integer $idtypeQuotient
     *
     * @return Quotients
     */
    public function setIdtypeQuotient($idtypeQuotient)
    {
        $this->idtypeQuotient = $idtypeQuotient;

        return $this;
    }

    /**
     * Get idtypeQuotient
     *
     * @return integer
     */
    public function getIdtypeQuotient()
    {
        return $this->idtypeQuotient;
    }
}
