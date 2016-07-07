<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaBudgets
 *
 * @ORM\Table(name="compta_budgets", indexes={@ORM\Index(name="IDexercice", columns={"IDexercice"})})
 * @ORM\Entity
 */
class ComptaBudgets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDbudget", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbudget;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDexercice", type="integer", nullable=true)
     */
    private $idexercice;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="string", length=200, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="analytiques", type="text", length=65535, nullable=true)
     */
    private $analytiques;

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
     * Get idbudget
     *
     * @return integer
     */
    public function getIdbudget()
    {
        return $this->idbudget;
    }

    /**
     * Set idexercice
     *
     * @param integer $idexercice
     *
     * @return ComptaBudgets
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
     * Set nom
     *
     * @param string $nom
     *
     * @return ComptaBudgets
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
     * @return ComptaBudgets
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
     * Set analytiques
     *
     * @param string $analytiques
     *
     * @return ComptaBudgets
     */
    public function setAnalytiques($analytiques)
    {
        $this->analytiques = $analytiques;

        return $this;
    }

    /**
     * Get analytiques
     *
     * @return string
     */
    public function getAnalytiques()
    {
        return $this->analytiques;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return ComptaBudgets
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
     * @return ComptaBudgets
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
}
