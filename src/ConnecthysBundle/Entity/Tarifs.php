<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarifs
 *
 * @ORM\Table(name="tarifs", indexes={@ORM\Index(name="IDactivite", columns={"IDactivite"}), @ORM\Index(name="IDcategorie_tarif", columns={"IDcategorie_tarif"}), @ORM\Index(name="IDnom_tarif", columns={"IDnom_tarif"}), @ORM\Index(name="IDtype_quotient", columns={"IDtype_quotient"})})
 * @ORM\Entity
 */
class Tarifs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtarif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_tarif", type="integer", nullable=true)
     */
    private $idcategorieTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDnom_tarif", type="integer", nullable=true)
     */
    private $idnomTarif;

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
     * @ORM\Column(name="condition_nbre_combi", type="integer", nullable=true)
     */
    private $conditionNbreCombi;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_periode", type="string", length=100, nullable=true)
     */
    private $conditionPeriode;

    /**
     * @var integer
     *
     * @ORM\Column(name="condition_nbre_jours", type="integer", nullable=true)
     */
    private $conditionNbreJours;

    /**
     * @var integer
     *
     * @ORM\Column(name="condition_conso_facturees", type="integer", nullable=true)
     */
    private $conditionConsoFacturees;

    /**
     * @var integer
     *
     * @ORM\Column(name="condition_dates_continues", type="integer", nullable=true)
     */
    private $conditionDatesContinues;

    /**
     * @var integer
     *
     * @ORM\Column(name="forfait_saisie_manuelle", type="integer", nullable=true)
     */
    private $forfaitSaisieManuelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="forfait_saisie_auto", type="integer", nullable=true)
     */
    private $forfaitSaisieAuto;

    /**
     * @var integer
     *
     * @ORM\Column(name="forfait_suppression_auto", type="integer", nullable=true)
     */
    private $forfaitSuppressionAuto;

    /**
     * @var string
     *
     * @ORM\Column(name="methode", type="string", length=50, nullable=true)
     */
    private $methode;

    /**
     * @var string
     *
     * @ORM\Column(name="categories_tarifs", type="text", length=65535, nullable=true)
     */
    private $categoriesTarifs;

    /**
     * @var string
     *
     * @ORM\Column(name="groupes", type="text", length=65535, nullable=true)
     */
    private $groupes;

    /**
     * @var string
     *
     * @ORM\Column(name="forfait_duree", type="string", length=50, nullable=true)
     */
    private $forfaitDuree;

    /**
     * @var string
     *
     * @ORM\Column(name="forfait_beneficiaire", type="string", length=50, nullable=true)
     */
    private $forfaitBeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="cotisations", type="text", length=65535, nullable=true)
     */
    private $cotisations;

    /**
     * @var string
     *
     * @ORM\Column(name="caisses", type="text", length=65535, nullable=true)
     */
    private $caisses;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="jours_scolaires", type="string", length=100, nullable=true)
     */
    private $joursScolaires;

    /**
     * @var string
     *
     * @ORM\Column(name="jours_vacances", type="string", length=100, nullable=true)
     */
    private $joursVacances;

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="text", length=65535, nullable=true)
     */
    private $options;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

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
     * @var string
     *
     * @ORM\Column(name="date_facturation", type="text", length=65535, nullable=true)
     */
    private $dateFacturation;

    /**
     * @var string
     *
     * @ORM\Column(name="etiquettes", type="text", length=65535, nullable=true)
     */
    private $etiquettes;

    /**
     * @var string
     *
     * @ORM\Column(name="etats", type="string", length=150, nullable=true)
     */
    private $etats;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_quotient", type="integer", nullable=true)
     */
    private $idtypeQuotient;



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
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return Tarifs
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
     * Set type
     *
     * @param string $type
     *
     * @return Tarifs
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
     * Set idcategorieTarif
     *
     * @param integer $idcategorieTarif
     *
     * @return Tarifs
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
     * Set idnomTarif
     *
     * @param integer $idnomTarif
     *
     * @return Tarifs
     */
    public function setIdnomTarif($idnomTarif)
    {
        $this->idnomTarif = $idnomTarif;

        return $this;
    }

    /**
     * Get idnomTarif
     *
     * @return integer
     */
    public function getIdnomTarif()
    {
        return $this->idnomTarif;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Tarifs
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
     * @return Tarifs
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
     * Set conditionNbreCombi
     *
     * @param integer $conditionNbreCombi
     *
     * @return Tarifs
     */
    public function setConditionNbreCombi($conditionNbreCombi)
    {
        $this->conditionNbreCombi = $conditionNbreCombi;

        return $this;
    }

    /**
     * Get conditionNbreCombi
     *
     * @return integer
     */
    public function getConditionNbreCombi()
    {
        return $this->conditionNbreCombi;
    }

    /**
     * Set conditionPeriode
     *
     * @param string $conditionPeriode
     *
     * @return Tarifs
     */
    public function setConditionPeriode($conditionPeriode)
    {
        $this->conditionPeriode = $conditionPeriode;

        return $this;
    }

    /**
     * Get conditionPeriode
     *
     * @return string
     */
    public function getConditionPeriode()
    {
        return $this->conditionPeriode;
    }

    /**
     * Set conditionNbreJours
     *
     * @param integer $conditionNbreJours
     *
     * @return Tarifs
     */
    public function setConditionNbreJours($conditionNbreJours)
    {
        $this->conditionNbreJours = $conditionNbreJours;

        return $this;
    }

    /**
     * Get conditionNbreJours
     *
     * @return integer
     */
    public function getConditionNbreJours()
    {
        return $this->conditionNbreJours;
    }

    /**
     * Set conditionConsoFacturees
     *
     * @param integer $conditionConsoFacturees
     *
     * @return Tarifs
     */
    public function setConditionConsoFacturees($conditionConsoFacturees)
    {
        $this->conditionConsoFacturees = $conditionConsoFacturees;

        return $this;
    }

    /**
     * Get conditionConsoFacturees
     *
     * @return integer
     */
    public function getConditionConsoFacturees()
    {
        return $this->conditionConsoFacturees;
    }

    /**
     * Set conditionDatesContinues
     *
     * @param integer $conditionDatesContinues
     *
     * @return Tarifs
     */
    public function setConditionDatesContinues($conditionDatesContinues)
    {
        $this->conditionDatesContinues = $conditionDatesContinues;

        return $this;
    }

    /**
     * Get conditionDatesContinues
     *
     * @return integer
     */
    public function getConditionDatesContinues()
    {
        return $this->conditionDatesContinues;
    }

    /**
     * Set forfaitSaisieManuelle
     *
     * @param integer $forfaitSaisieManuelle
     *
     * @return Tarifs
     */
    public function setForfaitSaisieManuelle($forfaitSaisieManuelle)
    {
        $this->forfaitSaisieManuelle = $forfaitSaisieManuelle;

        return $this;
    }

    /**
     * Get forfaitSaisieManuelle
     *
     * @return integer
     */
    public function getForfaitSaisieManuelle()
    {
        return $this->forfaitSaisieManuelle;
    }

    /**
     * Set forfaitSaisieAuto
     *
     * @param integer $forfaitSaisieAuto
     *
     * @return Tarifs
     */
    public function setForfaitSaisieAuto($forfaitSaisieAuto)
    {
        $this->forfaitSaisieAuto = $forfaitSaisieAuto;

        return $this;
    }

    /**
     * Get forfaitSaisieAuto
     *
     * @return integer
     */
    public function getForfaitSaisieAuto()
    {
        return $this->forfaitSaisieAuto;
    }

    /**
     * Set forfaitSuppressionAuto
     *
     * @param integer $forfaitSuppressionAuto
     *
     * @return Tarifs
     */
    public function setForfaitSuppressionAuto($forfaitSuppressionAuto)
    {
        $this->forfaitSuppressionAuto = $forfaitSuppressionAuto;

        return $this;
    }

    /**
     * Get forfaitSuppressionAuto
     *
     * @return integer
     */
    public function getForfaitSuppressionAuto()
    {
        return $this->forfaitSuppressionAuto;
    }

    /**
     * Set methode
     *
     * @param string $methode
     *
     * @return Tarifs
     */
    public function setMethode($methode)
    {
        $this->methode = $methode;

        return $this;
    }

    /**
     * Get methode
     *
     * @return string
     */
    public function getMethode()
    {
        return $this->methode;
    }

    /**
     * Set categoriesTarifs
     *
     * @param string $categoriesTarifs
     *
     * @return Tarifs
     */
    public function setCategoriesTarifs($categoriesTarifs)
    {
        $this->categoriesTarifs = $categoriesTarifs;

        return $this;
    }

    /**
     * Get categoriesTarifs
     *
     * @return string
     */
    public function getCategoriesTarifs()
    {
        return $this->categoriesTarifs;
    }

    /**
     * Set groupes
     *
     * @param string $groupes
     *
     * @return Tarifs
     */
    public function setGroupes($groupes)
    {
        $this->groupes = $groupes;

        return $this;
    }

    /**
     * Get groupes
     *
     * @return string
     */
    public function getGroupes()
    {
        return $this->groupes;
    }

    /**
     * Set forfaitDuree
     *
     * @param string $forfaitDuree
     *
     * @return Tarifs
     */
    public function setForfaitDuree($forfaitDuree)
    {
        $this->forfaitDuree = $forfaitDuree;

        return $this;
    }

    /**
     * Get forfaitDuree
     *
     * @return string
     */
    public function getForfaitDuree()
    {
        return $this->forfaitDuree;
    }

    /**
     * Set forfaitBeneficiaire
     *
     * @param string $forfaitBeneficiaire
     *
     * @return Tarifs
     */
    public function setForfaitBeneficiaire($forfaitBeneficiaire)
    {
        $this->forfaitBeneficiaire = $forfaitBeneficiaire;

        return $this;
    }

    /**
     * Get forfaitBeneficiaire
     *
     * @return string
     */
    public function getForfaitBeneficiaire()
    {
        return $this->forfaitBeneficiaire;
    }

    /**
     * Set cotisations
     *
     * @param string $cotisations
     *
     * @return Tarifs
     */
    public function setCotisations($cotisations)
    {
        $this->cotisations = $cotisations;

        return $this;
    }

    /**
     * Get cotisations
     *
     * @return string
     */
    public function getCotisations()
    {
        return $this->cotisations;
    }

    /**
     * Set caisses
     *
     * @param string $caisses
     *
     * @return Tarifs
     */
    public function setCaisses($caisses)
    {
        $this->caisses = $caisses;

        return $this;
    }

    /**
     * Get caisses
     *
     * @return string
     */
    public function getCaisses()
    {
        return $this->caisses;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Tarifs
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set joursScolaires
     *
     * @param string $joursScolaires
     *
     * @return Tarifs
     */
    public function setJoursScolaires($joursScolaires)
    {
        $this->joursScolaires = $joursScolaires;

        return $this;
    }

    /**
     * Get joursScolaires
     *
     * @return string
     */
    public function getJoursScolaires()
    {
        return $this->joursScolaires;
    }

    /**
     * Set joursVacances
     *
     * @param string $joursVacances
     *
     * @return Tarifs
     */
    public function setJoursVacances($joursVacances)
    {
        $this->joursVacances = $joursVacances;

        return $this;
    }

    /**
     * Get joursVacances
     *
     * @return string
     */
    public function getJoursVacances()
    {
        return $this->joursVacances;
    }

    /**
     * Set options
     *
     * @param string $options
     *
     * @return Tarifs
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return string
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return Tarifs
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
     * Set tva
     *
     * @param float $tva
     *
     * @return Tarifs
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
     * @return Tarifs
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
     * Set dateFacturation
     *
     * @param string $dateFacturation
     *
     * @return Tarifs
     */
    public function setDateFacturation($dateFacturation)
    {
        $this->dateFacturation = $dateFacturation;

        return $this;
    }

    /**
     * Get dateFacturation
     *
     * @return string
     */
    public function getDateFacturation()
    {
        return $this->dateFacturation;
    }

    /**
     * Set etiquettes
     *
     * @param string $etiquettes
     *
     * @return Tarifs
     */
    public function setEtiquettes($etiquettes)
    {
        $this->etiquettes = $etiquettes;

        return $this;
    }

    /**
     * Get etiquettes
     *
     * @return string
     */
    public function getEtiquettes()
    {
        return $this->etiquettes;
    }

    /**
     * Set etats
     *
     * @param string $etats
     *
     * @return Tarifs
     */
    public function setEtats($etats)
    {
        $this->etats = $etats;

        return $this;
    }

    /**
     * Get etats
     *
     * @return string
     */
    public function getEtats()
    {
        return $this->etats;
    }

    /**
     * Set idtypeQuotient
     *
     * @param integer $idtypeQuotient
     *
     * @return Tarifs
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
