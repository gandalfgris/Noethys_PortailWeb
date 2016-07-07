<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deductions
 *
 * @ORM\Table(name="deductions")
 * @ORM\Entity
 */
class Deductions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDdeduction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddeduction;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDprestation", type="integer", nullable=true)
     */
    private $idprestation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=true)
     */
    private $idcomptePayeur;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=200, nullable=true)
     */
    private $label;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide", type="integer", nullable=true)
     */
    private $idaide;



    /**
     * Get iddeduction
     *
     * @return integer
     */
    public function getIddeduction()
    {
        return $this->iddeduction;
    }

    /**
     * Set idprestation
     *
     * @param integer $idprestation
     *
     * @return Deductions
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
     * Set idcomptePayeur
     *
     * @param integer $idcomptePayeur
     *
     * @return Deductions
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
     * Set date
     *
     * @param string $date
     *
     * @return Deductions
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

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Deductions
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

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Deductions
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set idaide
     *
     * @param integer $idaide
     *
     * @return Deductions
     */
    public function setIdaide($idaide)
    {
        $this->idaide = $idaide;

        return $this;
    }

    /**
     * Get idaide
     *
     * @return integer
     */
    public function getIdaide()
    {
        return $this->idaide;
    }
}
