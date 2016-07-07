<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factures
 *
 * @ORM\Table(name="factures", indexes={@ORM\Index(name="index_factures_IDcompte_payeur", columns={"IDcompte_payeur"})})
 * @ORM\Entity
 */
class Factures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDfacture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacture;

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
     * @ORM\Column(name="date_echeance", type="string", length=10, nullable=true)
     */
    private $dateEcheance;

    /**
     * @var string
     *
     * @ORM\Column(name="activites", type="text", length=65535, nullable=true)
     */
    private $activites;

    /**
     * @var string
     *
     * @ORM\Column(name="individus", type="text", length=65535, nullable=true)
     */
    private $individus;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

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
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total;

    /**
     * @var float
     *
     * @ORM\Column(name="regle", type="float", precision=10, scale=0, nullable=true)
     */
    private $regle;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float", precision=10, scale=0, nullable=true)
     */
    private $solde;

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
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=100, nullable=true)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDprefixe", type="integer", nullable=true)
     */
    private $idprefixe;



    /**
     * Get idfacture
     *
     * @return integer
     */
    public function getIdfacture()
    {
        return $this->idfacture;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Factures
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
     * @return Factures
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
     * @return Factures
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
     * Set dateEcheance
     *
     * @param string $dateEcheance
     *
     * @return Factures
     */
    public function setDateEcheance($dateEcheance)
    {
        $this->dateEcheance = $dateEcheance;

        return $this;
    }

    /**
     * Get dateEcheance
     *
     * @return string
     */
    public function getDateEcheance()
    {
        return $this->dateEcheance;
    }

    /**
     * Set activites
     *
     * @param string $activites
     *
     * @return Factures
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
     * Set individus
     *
     * @param string $individus
     *
     * @return Factures
     */
    public function setIndividus($individus)
    {
        $this->individus = $individus;

        return $this;
    }

    /**
     * Get individus
     *
     * @return string
     */
    public function getIndividus()
    {
        return $this->individus;
    }

    /**
     * Set idutilisateur
     *
     * @param integer $idutilisateur
     *
     * @return Factures
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
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Factures
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
     * @return Factures
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
     * Set total
     *
     * @param float $total
     *
     * @return Factures
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set regle
     *
     * @param float $regle
     *
     * @return Factures
     */
    public function setRegle($regle)
    {
        $this->regle = $regle;

        return $this;
    }

    /**
     * Get regle
     *
     * @return float
     */
    public function getRegle()
    {
        return $this->regle;
    }

    /**
     * Set solde
     *
     * @param float $solde
     *
     * @return Factures
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
     * Set idlot
     *
     * @param integer $idlot
     *
     * @return Factures
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
     * @return Factures
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

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Factures
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set idprefixe
     *
     * @param integer $idprefixe
     *
     * @return Factures
     */
    public function setIdprefixe($idprefixe)
    {
        $this->idprefixe = $idprefixe;

        return $this;
    }

    /**
     * Get idprefixe
     *
     * @return integer
     */
    public function getIdprefixe()
    {
        return $this->idprefixe;
    }
}
