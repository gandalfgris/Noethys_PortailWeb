<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TarifsLignes
 *
 * @ORM\Table(name="tarifs_lignes", indexes={@ORM\Index(name="IDactivite", columns={"IDactivite"}), @ORM\Index(name="IDtarif", columns={"IDtarif"})})
 * @ORM\Entity
 */
class TarifsLignes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDligne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idligne;

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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=50, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_ligne", type="integer", nullable=true)
     */
    private $numLigne;

    /**
     * @var string
     *
     * @ORM\Column(name="tranche", type="string", length=10, nullable=true)
     */
    private $tranche;

    /**
     * @var float
     *
     * @ORM\Column(name="qf_min", type="float", precision=10, scale=0, nullable=true)
     */
    private $qfMin;

    /**
     * @var float
     *
     * @ORM\Column(name="qf_max", type="float", precision=10, scale=0, nullable=true)
     */
    private $qfMax;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_unique", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantUnique;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_enfant_1", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantEnfant1;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_enfant_2", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantEnfant2;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_enfant_3", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantEnfant3;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_enfant_4", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantEnfant4;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_enfant_5", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantEnfant5;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_enfant_6", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantEnfant6;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_enfants", type="integer", nullable=true)
     */
    private $nbreEnfants;

    /**
     * @var float
     *
     * @ORM\Column(name="coefficient", type="float", precision=10, scale=0, nullable=true)
     */
    private $coefficient;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_min", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantMin;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_max", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantMax;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_debut_min", type="string", length=10, nullable=true)
     */
    private $heureDebutMin;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_debut_max", type="string", length=10, nullable=true)
     */
    private $heureDebutMax;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_fin_min", type="string", length=10, nullable=true)
     */
    private $heureFinMin;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_fin_max", type="string", length=10, nullable=true)
     */
    private $heureFinMax;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_min", type="string", length=10, nullable=true)
     */
    private $dureeMin;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_max", type="string", length=10, nullable=true)
     */
    private $dureeMax;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="text", length=65535, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="temps_facture", type="string", length=10, nullable=true)
     */
    private $tempsFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="unite_horaire", type="string", length=10, nullable=true)
     */
    private $uniteHoraire;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_seuil", type="string", length=10, nullable=true)
     */
    private $dureeSeuil;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_plafond", type="string", length=10, nullable=true)
     */
    private $dureePlafond;

    /**
     * @var float
     *
     * @ORM\Column(name="taux", type="float", precision=10, scale=0, nullable=true)
     */
    private $taux;

    /**
     * @var float
     *
     * @ORM\Column(name="ajustement", type="float", precision=10, scale=0, nullable=true)
     */
    private $ajustement;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant_questionnaire", type="integer", nullable=true)
     */
    private $montantQuestionnaire;

    /**
     * @var float
     *
     * @ORM\Column(name="revenu_min", type="float", precision=10, scale=0, nullable=true)
     */
    private $revenuMin;

    /**
     * @var float
     *
     * @ORM\Column(name="revenu_max", type="float", precision=10, scale=0, nullable=true)
     */
    private $revenuMax;



    /**
     * Get idligne
     *
     * @return integer
     */
    public function getIdligne()
    {
        return $this->idligne;
    }

    /**
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return TarifsLignes
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
     * @return TarifsLignes
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
     * Set code
     *
     * @param string $code
     *
     * @return TarifsLignes
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set numLigne
     *
     * @param integer $numLigne
     *
     * @return TarifsLignes
     */
    public function setNumLigne($numLigne)
    {
        $this->numLigne = $numLigne;

        return $this;
    }

    /**
     * Get numLigne
     *
     * @return integer
     */
    public function getNumLigne()
    {
        return $this->numLigne;
    }

    /**
     * Set tranche
     *
     * @param string $tranche
     *
     * @return TarifsLignes
     */
    public function setTranche($tranche)
    {
        $this->tranche = $tranche;

        return $this;
    }

    /**
     * Get tranche
     *
     * @return string
     */
    public function getTranche()
    {
        return $this->tranche;
    }

    /**
     * Set qfMin
     *
     * @param float $qfMin
     *
     * @return TarifsLignes
     */
    public function setQfMin($qfMin)
    {
        $this->qfMin = $qfMin;

        return $this;
    }

    /**
     * Get qfMin
     *
     * @return float
     */
    public function getQfMin()
    {
        return $this->qfMin;
    }

    /**
     * Set qfMax
     *
     * @param float $qfMax
     *
     * @return TarifsLignes
     */
    public function setQfMax($qfMax)
    {
        $this->qfMax = $qfMax;

        return $this;
    }

    /**
     * Get qfMax
     *
     * @return float
     */
    public function getQfMax()
    {
        return $this->qfMax;
    }

    /**
     * Set montantUnique
     *
     * @param float $montantUnique
     *
     * @return TarifsLignes
     */
    public function setMontantUnique($montantUnique)
    {
        $this->montantUnique = $montantUnique;

        return $this;
    }

    /**
     * Get montantUnique
     *
     * @return float
     */
    public function getMontantUnique()
    {
        return $this->montantUnique;
    }

    /**
     * Set montantEnfant1
     *
     * @param float $montantEnfant1
     *
     * @return TarifsLignes
     */
    public function setMontantEnfant1($montantEnfant1)
    {
        $this->montantEnfant1 = $montantEnfant1;

        return $this;
    }

    /**
     * Get montantEnfant1
     *
     * @return float
     */
    public function getMontantEnfant1()
    {
        return $this->montantEnfant1;
    }

    /**
     * Set montantEnfant2
     *
     * @param float $montantEnfant2
     *
     * @return TarifsLignes
     */
    public function setMontantEnfant2($montantEnfant2)
    {
        $this->montantEnfant2 = $montantEnfant2;

        return $this;
    }

    /**
     * Get montantEnfant2
     *
     * @return float
     */
    public function getMontantEnfant2()
    {
        return $this->montantEnfant2;
    }

    /**
     * Set montantEnfant3
     *
     * @param float $montantEnfant3
     *
     * @return TarifsLignes
     */
    public function setMontantEnfant3($montantEnfant3)
    {
        $this->montantEnfant3 = $montantEnfant3;

        return $this;
    }

    /**
     * Get montantEnfant3
     *
     * @return float
     */
    public function getMontantEnfant3()
    {
        return $this->montantEnfant3;
    }

    /**
     * Set montantEnfant4
     *
     * @param float $montantEnfant4
     *
     * @return TarifsLignes
     */
    public function setMontantEnfant4($montantEnfant4)
    {
        $this->montantEnfant4 = $montantEnfant4;

        return $this;
    }

    /**
     * Get montantEnfant4
     *
     * @return float
     */
    public function getMontantEnfant4()
    {
        return $this->montantEnfant4;
    }

    /**
     * Set montantEnfant5
     *
     * @param float $montantEnfant5
     *
     * @return TarifsLignes
     */
    public function setMontantEnfant5($montantEnfant5)
    {
        $this->montantEnfant5 = $montantEnfant5;

        return $this;
    }

    /**
     * Get montantEnfant5
     *
     * @return float
     */
    public function getMontantEnfant5()
    {
        return $this->montantEnfant5;
    }

    /**
     * Set montantEnfant6
     *
     * @param float $montantEnfant6
     *
     * @return TarifsLignes
     */
    public function setMontantEnfant6($montantEnfant6)
    {
        $this->montantEnfant6 = $montantEnfant6;

        return $this;
    }

    /**
     * Get montantEnfant6
     *
     * @return float
     */
    public function getMontantEnfant6()
    {
        return $this->montantEnfant6;
    }

    /**
     * Set nbreEnfants
     *
     * @param integer $nbreEnfants
     *
     * @return TarifsLignes
     */
    public function setNbreEnfants($nbreEnfants)
    {
        $this->nbreEnfants = $nbreEnfants;

        return $this;
    }

    /**
     * Get nbreEnfants
     *
     * @return integer
     */
    public function getNbreEnfants()
    {
        return $this->nbreEnfants;
    }

    /**
     * Set coefficient
     *
     * @param float $coefficient
     *
     * @return TarifsLignes
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    /**
     * Get coefficient
     *
     * @return float
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * Set montantMin
     *
     * @param float $montantMin
     *
     * @return TarifsLignes
     */
    public function setMontantMin($montantMin)
    {
        $this->montantMin = $montantMin;

        return $this;
    }

    /**
     * Get montantMin
     *
     * @return float
     */
    public function getMontantMin()
    {
        return $this->montantMin;
    }

    /**
     * Set montantMax
     *
     * @param float $montantMax
     *
     * @return TarifsLignes
     */
    public function setMontantMax($montantMax)
    {
        $this->montantMax = $montantMax;

        return $this;
    }

    /**
     * Get montantMax
     *
     * @return float
     */
    public function getMontantMax()
    {
        return $this->montantMax;
    }

    /**
     * Set heureDebutMin
     *
     * @param string $heureDebutMin
     *
     * @return TarifsLignes
     */
    public function setHeureDebutMin($heureDebutMin)
    {
        $this->heureDebutMin = $heureDebutMin;

        return $this;
    }

    /**
     * Get heureDebutMin
     *
     * @return string
     */
    public function getHeureDebutMin()
    {
        return $this->heureDebutMin;
    }

    /**
     * Set heureDebutMax
     *
     * @param string $heureDebutMax
     *
     * @return TarifsLignes
     */
    public function setHeureDebutMax($heureDebutMax)
    {
        $this->heureDebutMax = $heureDebutMax;

        return $this;
    }

    /**
     * Get heureDebutMax
     *
     * @return string
     */
    public function getHeureDebutMax()
    {
        return $this->heureDebutMax;
    }

    /**
     * Set heureFinMin
     *
     * @param string $heureFinMin
     *
     * @return TarifsLignes
     */
    public function setHeureFinMin($heureFinMin)
    {
        $this->heureFinMin = $heureFinMin;

        return $this;
    }

    /**
     * Get heureFinMin
     *
     * @return string
     */
    public function getHeureFinMin()
    {
        return $this->heureFinMin;
    }

    /**
     * Set heureFinMax
     *
     * @param string $heureFinMax
     *
     * @return TarifsLignes
     */
    public function setHeureFinMax($heureFinMax)
    {
        $this->heureFinMax = $heureFinMax;

        return $this;
    }

    /**
     * Get heureFinMax
     *
     * @return string
     */
    public function getHeureFinMax()
    {
        return $this->heureFinMax;
    }

    /**
     * Set dureeMin
     *
     * @param string $dureeMin
     *
     * @return TarifsLignes
     */
    public function setDureeMin($dureeMin)
    {
        $this->dureeMin = $dureeMin;

        return $this;
    }

    /**
     * Get dureeMin
     *
     * @return string
     */
    public function getDureeMin()
    {
        return $this->dureeMin;
    }

    /**
     * Set dureeMax
     *
     * @param string $dureeMax
     *
     * @return TarifsLignes
     */
    public function setDureeMax($dureeMax)
    {
        $this->dureeMax = $dureeMax;

        return $this;
    }

    /**
     * Get dureeMax
     *
     * @return string
     */
    public function getDureeMax()
    {
        return $this->dureeMax;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return TarifsLignes
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
     * Set label
     *
     * @param string $label
     *
     * @return TarifsLignes
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
     * Set tempsFacture
     *
     * @param string $tempsFacture
     *
     * @return TarifsLignes
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
     * Set uniteHoraire
     *
     * @param string $uniteHoraire
     *
     * @return TarifsLignes
     */
    public function setUniteHoraire($uniteHoraire)
    {
        $this->uniteHoraire = $uniteHoraire;

        return $this;
    }

    /**
     * Get uniteHoraire
     *
     * @return string
     */
    public function getUniteHoraire()
    {
        return $this->uniteHoraire;
    }

    /**
     * Set dureeSeuil
     *
     * @param string $dureeSeuil
     *
     * @return TarifsLignes
     */
    public function setDureeSeuil($dureeSeuil)
    {
        $this->dureeSeuil = $dureeSeuil;

        return $this;
    }

    /**
     * Get dureeSeuil
     *
     * @return string
     */
    public function getDureeSeuil()
    {
        return $this->dureeSeuil;
    }

    /**
     * Set dureePlafond
     *
     * @param string $dureePlafond
     *
     * @return TarifsLignes
     */
    public function setDureePlafond($dureePlafond)
    {
        $this->dureePlafond = $dureePlafond;

        return $this;
    }

    /**
     * Get dureePlafond
     *
     * @return string
     */
    public function getDureePlafond()
    {
        return $this->dureePlafond;
    }

    /**
     * Set taux
     *
     * @param float $taux
     *
     * @return TarifsLignes
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
     * Set ajustement
     *
     * @param float $ajustement
     *
     * @return TarifsLignes
     */
    public function setAjustement($ajustement)
    {
        $this->ajustement = $ajustement;

        return $this;
    }

    /**
     * Get ajustement
     *
     * @return float
     */
    public function getAjustement()
    {
        return $this->ajustement;
    }

    /**
     * Set montantQuestionnaire
     *
     * @param integer $montantQuestionnaire
     *
     * @return TarifsLignes
     */
    public function setMontantQuestionnaire($montantQuestionnaire)
    {
        $this->montantQuestionnaire = $montantQuestionnaire;

        return $this;
    }

    /**
     * Get montantQuestionnaire
     *
     * @return integer
     */
    public function getMontantQuestionnaire()
    {
        return $this->montantQuestionnaire;
    }

    /**
     * Set revenuMin
     *
     * @param float $revenuMin
     *
     * @return TarifsLignes
     */
    public function setRevenuMin($revenuMin)
    {
        $this->revenuMin = $revenuMin;

        return $this;
    }

    /**
     * Get revenuMin
     *
     * @return float
     */
    public function getRevenuMin()
    {
        return $this->revenuMin;
    }

    /**
     * Set revenuMax
     *
     * @param float $revenuMax
     *
     * @return TarifsLignes
     */
    public function setRevenuMax($revenuMax)
    {
        $this->revenuMax = $revenuMax;

        return $this;
    }

    /**
     * Get revenuMax
     *
     * @return float
     */
    public function getRevenuMax()
    {
        return $this->revenuMax;
    }
}
