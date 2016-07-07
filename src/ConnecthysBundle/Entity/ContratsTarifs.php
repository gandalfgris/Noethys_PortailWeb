<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratsTarifs
 *
 * @ORM\Table(name="contrats_tarifs")
 * @ORM\Entity
 */
class ContratsTarifs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcontrat_tarif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontratTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcontrat", type="integer", nullable=true)
     */
    private $idcontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=10, nullable=true)
     */
    private $dateDebut;

    /**
     * @var float
     *
     * @ORM\Column(name="revenu", type="float", precision=10, scale=0, nullable=true)
     */
    private $revenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotient", type="integer", nullable=true)
     */
    private $quotient;

    /**
     * @var float
     *
     * @ORM\Column(name="taux", type="float", precision=10, scale=0, nullable=true)
     */
    private $taux;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif_base", type="float", precision=10, scale=0, nullable=true)
     */
    private $tarifBase;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif_depassement", type="float", precision=10, scale=0, nullable=true)
     */
    private $tarifDepassement;



    /**
     * Get idcontratTarif
     *
     * @return integer
     */
    public function getIdcontratTarif()
    {
        return $this->idcontratTarif;
    }

    /**
     * Set idcontrat
     *
     * @param integer $idcontrat
     *
     * @return ContratsTarifs
     */
    public function setIdcontrat($idcontrat)
    {
        $this->idcontrat = $idcontrat;

        return $this;
    }

    /**
     * Get idcontrat
     *
     * @return integer
     */
    public function getIdcontrat()
    {
        return $this->idcontrat;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return ContratsTarifs
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
     * Set revenu
     *
     * @param float $revenu
     *
     * @return ContratsTarifs
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
     * Set quotient
     *
     * @param integer $quotient
     *
     * @return ContratsTarifs
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
     * Set taux
     *
     * @param float $taux
     *
     * @return ContratsTarifs
     */
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }

    /**
     * Get taux
     *
     * @return float
     */
    public function getTaux()
    {
        return $this->taux;
    }

    /**
     * Set tarifBase
     *
     * @param float $tarifBase
     *
     * @return ContratsTarifs
     */
    public function setTarifBase($tarifBase)
    {
        $this->tarifBase = $tarifBase;

        return $this;
    }

    /**
     * Get tarifBase
     *
     * @return float
     */
    public function getTarifBase()
    {
        return $this->tarifBase;
    }

    /**
     * Set tarifDepassement
     *
     * @param float $tarifDepassement
     *
     * @return ContratsTarifs
     */
    public function setTarifDepassement($tarifDepassement)
    {
        $this->tarifDepassement = $tarifDepassement;

        return $this;
    }

    /**
     * Get tarifDepassement
     *
     * @return float
     */
    public function getTarifDepassement()
    {
        return $this->tarifDepassement;
    }
}
