<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ventilation
 *
 * @ORM\Table(name="ventilation", indexes={@ORM\Index(name="IDcompte_payeur", columns={"IDcompte_payeur"}), @ORM\Index(name="IDreglement", columns={"IDreglement"}), @ORM\Index(name="IDprestation", columns={"IDprestation"})})
 * @ORM\Entity
 */
class Ventilation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDventilation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idventilation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=true)
     */
    private $idcomptePayeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDreglement", type="integer", nullable=true)
     */
    private $idreglement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDprestation", type="integer", nullable=true)
     */
    private $idprestation;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;



    /**
     * Get idventilation
     *
     * @return integer
     */
    public function getIdventilation()
    {
        return $this->idventilation;
    }

    /**
     * Set idcomptePayeur
     *
     * @param integer $idcomptePayeur
     *
     * @return Ventilation
     */
    public function setIdcomptePayeur($idcomptePayeur)
    {
        $this->idcomptePayeur = $idcomptePayeur;

        return $this;
    }

    /**
     * Get idcomptePayeur
     *
     * @return integer
     */
    public function getIdcomptePayeur()
    {
        return $this->idcomptePayeur;
    }

    /**
     * Set idreglement
     *
     * @param integer $idreglement
     *
     * @return Ventilation
     */
    public function setIdreglement($idreglement)
    {
        $this->idreglement = $idreglement;

        return $this;
    }

    /**
     * Get idreglement
     *
     * @return integer
     */
    public function getIdreglement()
    {
        return $this->idreglement;
    }

    /**
     * Set idprestation
     *
     * @param integer $idprestation
     *
     * @return Ventilation
     */
    public function setIdprestation($idprestation)
    {
        $this->idprestation = $idprestation;

        return $this;
    }

    /**
     * Get idprestation
     *
     * @return integer
     */
    public function getIdprestation()
    {
        return $this->idprestation;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Ventilation
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }
}
