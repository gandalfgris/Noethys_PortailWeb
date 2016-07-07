<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rappels
 *
 * @ORM\Table(name="rappels", indexes={@ORM\Index(name="IDcompte_payeur", columns={"IDcompte_payeur"}), @ORM\Index(name="IDutilisateur", columns={"IDutilisateur"}), @ORM\Index(name="IDtexte", columns={"IDtexte"}), @ORM\Index(name="IDlot", columns={"IDlot"})})
 * @ORM\Entity
 */
class Rappels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDrappel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrappel;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=true)
     */
    private $idcomptePayeur;

    /**
     * @var string
     *
     * @ORM\Column(name="date_edition", type="string", length=10, nullable=true)
     */
    private $dateEdition;

    /**
     * @var string
     *
     * @ORM\Column(name="activites", type="text", length=65535, nullable=true)
     */
    private $activites;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtexte", type="integer", nullable=true)
     */
    private $idtexte;

    /**
     * @var string
     *
     * @ORM\Column(name="date_reference", type="string", length=10, nullable=true)
     */
    private $dateReference;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float", precision=10, scale=0, nullable=true)
     */
    private $solde;

    /**
     * @var string
     *
     * @ORM\Column(name="date_min", type="string", length=10, nullable=true)
     */
    private $dateMin;

    /**
     * @var string
     *
     * @ORM\Column(name="date_max", type="string", length=10, nullable=true)
     */
    private $dateMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDlot", type="integer", nullable=true)
     */
    private $idlot;

    /**
     * @var string
     *
     * @ORM\Column(name="prestations", type="text", length=65535, nullable=true)
     */
    private $prestations;



    /**
     * Get idrappel
     *
     * @return integer
     */
    public function getIdrappel()
    {
        return $this->idrappel;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Rappels
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set idcomptePayeur
     *
     * @param integer $idcomptePayeur
     *
     * @return Rappels
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
     * Set dateEdition
     *
     * @param string $dateEdition
     *
     * @return Rappels
     */
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;

        return $this;
    }

    /**
     * Get dateEdition
     *
     * @return string
     */
    public function getDateEdition()
    {
        return $this->dateEdition;
    }

    /**
     * Set activites
     *
     * @param string $activites
     *
     * @return Rappels
     */
    public function setActivites($activites)
    {
        $this->activites = $activites;

        return $this;
    }

    /**
     * Get activites
     *
     * @return string
     */
    public function getActivites()
    {
        return $this->activites;
    }

    /**
     * Set idutilisateur
     *
     * @param integer $idutilisateur
     *
     * @return Rappels
     */
    public function setIdutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return integer
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Set idtexte
     *
     * @param integer $idtexte
     *
     * @return Rappels
     */
    public function setIdtexte($idtexte)
    {
        $this->idtexte = $idtexte;

        return $this;
    }

    /**
     * Get idtexte
     *
     * @return integer
     */
    public function getIdtexte()
    {
        return $this->idtexte;
    }

    /**
     * Set dateReference
     *
     * @param string $dateReference
     *
     * @return Rappels
     */
    public function setDateReference($dateReference)
    {
        $this->dateReference = $dateReference;

        return $this;
    }

    /**
     * Get dateReference
     *
     * @return string
     */
    public function getDateReference()
    {
        return $this->dateReference;
    }

    /**
     * Set solde
     *
     * @param float $solde
     *
     * @return Rappels
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return float
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set dateMin
     *
     * @param string $dateMin
     *
     * @return Rappels
     */
    public function setDateMin($dateMin)
    {
        $this->dateMin = $dateMin;

        return $this;
    }

    /**
     * Get dateMin
     *
     * @return string
     */
    public function getDateMin()
    {
        return $this->dateMin;
    }

    /**
     * Set dateMax
     *
     * @param string $dateMax
     *
     * @return Rappels
     */
    public function setDateMax($dateMax)
    {
        $this->dateMax = $dateMax;

        return $this;
    }

    /**
     * Get dateMax
     *
     * @return string
     */
    public function getDateMax()
    {
        return $this->dateMax;
    }

    /**
     * Set idlot
     *
     * @param integer $idlot
     *
     * @return Rappels
     */
    public function setIdlot($idlot)
    {
        $this->idlot = $idlot;

        return $this;
    }

    /**
     * Get idlot
     *
     * @return integer
     */
    public function getIdlot()
    {
        return $this->idlot;
    }

    /**
     * Set prestations
     *
     * @param string $prestations
     *
     * @return Rappels
     */
    public function setPrestations($prestations)
    {
        $this->prestations = $prestations;

        return $this;
    }

    /**
     * Get prestations
     *
     * @return string
     */
    public function getPrestations()
    {
        return $this->prestations;
    }
}
