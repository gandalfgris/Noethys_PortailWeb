<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaVentilation
 *
 * @ORM\Table(name="compta_ventilation", indexes={@ORM\Index(name="IDoperation", columns={"IDoperation"}), @ORM\Index(name="IDexercice", columns={"IDexercice"}), @ORM\Index(name="IDcategorie", columns={"IDcategorie"}), @ORM\Index(name="IDanalytique", columns={"IDanalytique"})})
 * @ORM\Entity
 */
class ComptaVentilation
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
     * @ORM\Column(name="IDoperation", type="integer", nullable=true)
     */
    private $idoperation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDexercice", type="integer", nullable=true)
     */
    private $idexercice;

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
     * @var string
     *
     * @ORM\Column(name="date_budget", type="string", length=10, nullable=true)
     */
    private $dateBudget;



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
     * Set idoperation
     *
     * @param integer $idoperation
     *
     * @return ComptaVentilation
     */
    public function setIdoperation($idoperation)
    {
        $this->idoperation = $idoperation;

        return $this;
    }

    /**
     * Get idoperation
     *
     * @return integer
     */
    public function getIdoperation()
    {
        return $this->idoperation;
    }

    /**
     * Set idexercice
     *
     * @param integer $idexercice
     *
     * @return ComptaVentilation
     */
    public function setIdexercice($idexercice)
    {
        $this->idexercice = $idexercice;

        return $this;
    }

    /**
     * Get idexercice
     *
     * @return integer
     */
    public function getIdexercice()
    {
        return $this->idexercice;
    }

    /**
     * Set idcategorie
     *
     * @param integer $idcategorie
     *
     * @return ComptaVentilation
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
     * @return ComptaVentilation
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
     * @return ComptaVentilation
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
     * @return ComptaVentilation
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
     * Set dateBudget
     *
     * @param string $dateBudget
     *
     * @return ComptaVentilation
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
}
