<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestations
 *
 * @ORM\Table(name="prestations", indexes={@ORM\Index(name="index_prestations_IDfamille", columns={"IDfamille"}), @ORM\Index(name="index_prestations_date", columns={"date"}), @ORM\Index(name="index_prestations_IDcompte_payeur", columns={"IDcompte_payeur"}), @ORM\Index(name="index_prestations_IDactivite", columns={"IDactivite"}), @ORM\Index(name="IDtarif", columns={"IDtarif"}), @ORM\Index(name="IDfacture", columns={"IDfacture"}), @ORM\Index(name="IDindividu", columns={"IDindividu"}), @ORM\Index(name="IDcategorie_tarif", columns={"IDcategorie_tarif"}), @ORM\Index(name="IDcontrat", columns={"IDcontrat"})})
 * @ORM\Entity
 */
class Prestations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDprestation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=50, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=200, nullable=true)
     */
    private $label;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_initial", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantInitial;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtarif", type="integer", nullable=true)
     */
    private $idtarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfacture", type="integer", nullable=true)
     */
    private $idfacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="forfait", type="integer", nullable=true)
     */
    private $forfait;

    /**
     * @var string
     *
     * @ORM\Column(name="temps_facture", type="string", length=10, nullable=true)
     */
    private $tempsFacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_tarif", type="integer", nullable=true)
     */
    private $idcategorieTarif;

    /**
     * @var string
     *
     * @ORM\Column(name="forfait_date_debut", type="string", length=10, nullable=true)
     */
    private $forfaitDateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="forfait_date_fin", type="string", length=10, nullable=true)
     */
    private $forfaitDateFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="reglement_frais", type="integer", nullable=true)
     */
    private $reglementFrais;

    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float", precision=10, scale=0, nullable=true)
     */
    private $tva;

    /**
     * @var string
     *
     * @ORM\Column(name="code_compta", type="string", length=200, nullable=true)
     */
    private $codeCompta;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcontrat", type="integer", nullable=true)
     */
    private $idcontrat;



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
     * @return Prestations
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
     * @return Prestations
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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Prestations
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Prestations
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
     * Set montantInitial
     *
     * @param float $montantInitial
     *
     * @return Prestations
     */
    public function setMontantInitial($montantInitial)
    {
        $this->montantInitial = $montantInitial;

        return $this;
    }

    /**
     * Get montantInitial
     *
     * @return float
     */
    public function getMontantInitial()
    {
        return $this->montantInitial;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Prestations
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
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return Prestations
     */
    public function setIdactivite($idactivite)
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    /**
     * Get idactivite
     *
     * @return integer
     */
    public function getIdactivite()
    {
        return $this->idactivite;
    }

    /**
     * Set idtarif
     *
     * @param integer $idtarif
     *
     * @return Prestations
     */
    public function setIdtarif($idtarif)
    {
        $this->idtarif = $idtarif;

        return $this;
    }

    /**
     * Get idtarif
     *
     * @return integer
     */
    public function getIdtarif()
    {
        return $this->idtarif;
    }

    /**
     * Set idfacture
     *
     * @param integer $idfacture
     *
     * @return Prestations
     */
    public function setIdfacture($idfacture)
    {
        $this->idfacture = $idfacture;

        return $this;
    }

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
     * Set idfamille
     *
     * @param integer $idfamille
     *
     * @return Prestations
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
     * Set idindividu
     *
     * @param integer $idindividu
     *
     * @return Prestations
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
     * Set forfait
     *
     * @param integer $forfait
     *
     * @return Prestations
     */
    public function setForfait($forfait)
    {
        $this->forfait = $forfait;

        return $this;
    }

    /**
     * Get forfait
     *
     * @return integer
     */
    public function getForfait()
    {
        return $this->forfait;
    }

    /**
     * Set tempsFacture
     *
     * @param string $tempsFacture
     *
     * @return Prestations
     */
    public function setTempsFacture($tempsFacture)
    {
        $this->tempsFacture = $tempsFacture;

        return $this;
    }

    /**
     * Get tempsFacture
     *
     * @return string
     */
    public function getTempsFacture()
    {
        return $this->tempsFacture;
    }

    /**
     * Set idcategorieTarif
     *
     * @param integer $idcategorieTarif
     *
     * @return Prestations
     */
    public function setIdcategorieTarif($idcategorieTarif)
    {
        $this->idcategorieTarif = $idcategorieTarif;

        return $this;
    }

    /**
     * Get idcategorieTarif
     *
     * @return integer
     */
    public function getIdcategorieTarif()
    {
        return $this->idcategorieTarif;
    }

    /**
     * Set forfaitDateDebut
     *
     * @param string $forfaitDateDebut
     *
     * @return Prestations
     */
    public function setForfaitDateDebut($forfaitDateDebut)
    {
        $this->forfaitDateDebut = $forfaitDateDebut;

        return $this;
    }

    /**
     * Get forfaitDateDebut
     *
     * @return string
     */
    public function getForfaitDateDebut()
    {
        return $this->forfaitDateDebut;
    }

    /**
     * Set forfaitDateFin
     *
     * @param string $forfaitDateFin
     *
     * @return Prestations
     */
    public function setForfaitDateFin($forfaitDateFin)
    {
        $this->forfaitDateFin = $forfaitDateFin;

        return $this;
    }

    /**
     * Get forfaitDateFin
     *
     * @return string
     */
    public function getForfaitDateFin()
    {
        return $this->forfaitDateFin;
    }

    /**
     * Set reglementFrais
     *
     * @param integer $reglementFrais
     *
     * @return Prestations
     */
    public function setReglementFrais($reglementFrais)
    {
        $this->reglementFrais = $reglementFrais;

        return $this;
    }

    /**
     * Get reglementFrais
     *
     * @return integer
     */
    public function getReglementFrais()
    {
        return $this->reglementFrais;
    }

    /**
     * Set tva
     *
     * @param float $tva
     *
     * @return Prestations
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return float
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set codeCompta
     *
     * @param string $codeCompta
     *
     * @return Prestations
     */
    public function setCodeCompta($codeCompta)
    {
        $this->codeCompta = $codeCompta;

        return $this;
    }

    /**
     * Get codeCompta
     *
     * @return string
     */
    public function getCodeCompta()
    {
        return $this->codeCompta;
    }

    /**
     * Set idcontrat
     *
     * @param integer $idcontrat
     *
     * @return Prestations
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
}
