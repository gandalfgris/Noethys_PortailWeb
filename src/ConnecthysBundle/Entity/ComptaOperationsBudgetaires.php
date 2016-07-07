<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaOperationsBudgetaires
 *
 * @ORM\Table(name="compta_operations_budgetaires", indexes={@ORM\Index(name="IDcategorie", columns={"IDcategorie"}), @ORM\Index(name="IDanalytique", columns={"IDanalytique"})})
 * @ORM\Entity
 */
class ComptaOperationsBudgetaires
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDoperation_budgetaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoperationBudgetaire;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=200, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="date_budget", type="string", length=10, nullable=true)
     */
    private $dateBudget;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie", type="integer", nullable=true)
     */
    private $idcategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDanalytique", type="integer", nullable=true)
     */
    private $idanalytique;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="text", length=65535, nullable=true)
     */
    private $libelle;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;



    /**
     * Get idoperationBudgetaire
     *
     * @return integer
     */
    public function getIdoperationBudgetaire()
    {
        return $this->idoperationBudgetaire;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ComptaOperationsBudgetaires
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
     * Set dateBudget
     *
     * @param string $dateBudget
     *
     * @return ComptaOperationsBudgetaires
     */
    public function setDateBudget($dateBudget)
    {
        $this->dateBudget = $dateBudget;

        return $this;
    }

    /**
     * Get dateBudget
     *
     * @return string
     */
    public function getDateBudget()
    {
        return $this->dateBudget;
    }

    /**
     * Set idcategorie
     *
     * @param integer $idcategorie
     *
     * @return ComptaOperationsBudgetaires
     */
    public function setIdcategorie($idcategorie)
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    /**
     * Get idcategorie
     *
     * @return integer
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * Set idanalytique
     *
     * @param integer $idanalytique
     *
     * @return ComptaOperationsBudgetaires
     */
    public function setIdanalytique($idanalytique)
    {
        $this->idanalytique = $idanalytique;

        return $this;
    }

    /**
     * Get idanalytique
     *
     * @return integer
     */
    public function getIdanalytique()
    {
        return $this->idanalytique;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return ComptaOperationsBudgetaires
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return ComptaOperationsBudgetaires
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
