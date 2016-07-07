<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PesLots
 *
 * @ORM\Table(name="pes_lots", indexes={@ORM\Index(name="IDcompte", columns={"IDcompte"}), @ORM\Index(name="IDmode", columns={"IDmode"})})
 * @ORM\Entity
 */
class PesLots
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDlot", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlot;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillage", type="integer", nullable=true)
     */
    private $verrouillage;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var integer
     *
     * @ORM\Column(name="reglement_auto", type="integer", nullable=true)
     */
    private $reglementAuto;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte", type="integer", nullable=true)
     */
    private $idcompte;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmode", type="integer", nullable=true)
     */
    private $idmode;

    /**
     * @var integer
     *
     * @ORM\Column(name="exercice", type="integer", nullable=true)
     */
    private $exercice;

    /**
     * @var integer
     *
     * @ORM\Column(name="mois", type="integer", nullable=true)
     */
    private $mois;

    /**
     * @var string
     *
     * @ORM\Column(name="objet_dette", type="text", length=65535, nullable=true)
     */
    private $objetDette;

    /**
     * @var string
     *
     * @ORM\Column(name="date_emission", type="string", length=10, nullable=true)
     */
    private $dateEmission;

    /**
     * @var string
     *
     * @ORM\Column(name="date_prelevement", type="string", length=10, nullable=true)
     */
    private $datePrelevement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_envoi", type="string", length=10, nullable=true)
     */
    private $dateEnvoi;

    /**
     * @var string
     *
     * @ORM\Column(name="id_bordereau", type="string", length=200, nullable=true)
     */
    private $idBordereau;

    /**
     * @var string
     *
     * @ORM\Column(name="id_poste", type="string", length=200, nullable=true)
     */
    private $idPoste;

    /**
     * @var string
     *
     * @ORM\Column(name="id_collectivite", type="string", length=200, nullable=true)
     */
    private $idCollectivite;

    /**
     * @var string
     *
     * @ORM\Column(name="code_collectivite", type="string", length=200, nullable=true)
     */
    private $codeCollectivite;

    /**
     * @var string
     *
     * @ORM\Column(name="code_budget", type="string", length=200, nullable=true)
     */
    private $codeBudget;

    /**
     * @var string
     *
     * @ORM\Column(name="code_prodloc", type="string", length=200, nullable=true)
     */
    private $codeProdloc;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_libelle", type="text", length=65535, nullable=true)
     */
    private $prelevementLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="objet_piece", type="text", length=65535, nullable=true)
     */
    private $objetPiece;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return PesLots
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
     * Set verrouillage
     *
     * @param integer $verrouillage
     *
     * @return PesLots
     */
    public function setVerrouillage($verrouillage)
    {
        $this->verrouillage = $verrouillage;

        return $this;
    }

    /**
     * Get verrouillage
     *
     * @return integer
     */
    public function getVerrouillage()
    {
        return $this->verrouillage;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return PesLots
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
     * Set reglementAuto
     *
     * @param integer $reglementAuto
     *
     * @return PesLots
     */
    public function setReglementAuto($reglementAuto)
    {
        $this->reglementAuto = $reglementAuto;

        return $this;
    }

    /**
     * Get reglementAuto
     *
     * @return integer
     */
    public function getReglementAuto()
    {
        return $this->reglementAuto;
    }

    /**
     * Set idcompte
     *
     * @param integer $idcompte
     *
     * @return PesLots
     */
    public function setIdcompte($idcompte)
    {
        $this->idcompte = $idcompte;

        return $this;
    }

    /**
     * Get idcompte
     *
     * @return integer
     */
    public function getIdcompte()
    {
        return $this->idcompte;
    }

    /**
     * Set idmode
     *
     * @param integer $idmode
     *
     * @return PesLots
     */
    public function setIdmode($idmode)
    {
        $this->idmode = $idmode;

        return $this;
    }

    /**
     * Get idmode
     *
     * @return integer
     */
    public function getIdmode()
    {
        return $this->idmode;
    }

    /**
     * Set exercice
     *
     * @param integer $exercice
     *
     * @return PesLots
     */
    public function setExercice($exercice)
    {
        $this->exercice = $exercice;

        return $this;
    }

    /**
     * Get exercice
     *
     * @return integer
     */
    public function getExercice()
    {
        return $this->exercice;
    }

    /**
     * Set mois
     *
     * @param integer $mois
     *
     * @return PesLots
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return integer
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set objetDette
     *
     * @param string $objetDette
     *
     * @return PesLots
     */
    public function setObjetDette($objetDette)
    {
        $this->objetDette = $objetDette;

        return $this;
    }

    /**
     * Get objetDette
     *
     * @return string
     */
    public function getObjetDette()
    {
        return $this->objetDette;
    }

    /**
     * Set dateEmission
     *
     * @param string $dateEmission
     *
     * @return PesLots
     */
    public function setDateEmission($dateEmission)
    {
        $this->dateEmission = $dateEmission;

        return $this;
    }

    /**
     * Get dateEmission
     *
     * @return string
     */
    public function getDateEmission()
    {
        return $this->dateEmission;
    }

    /**
     * Set datePrelevement
     *
     * @param string $datePrelevement
     *
     * @return PesLots
     */
    public function setDatePrelevement($datePrelevement)
    {
        $this->datePrelevement = $datePrelevement;

        return $this;
    }

    /**
     * Get datePrelevement
     *
     * @return string
     */
    public function getDatePrelevement()
    {
        return $this->datePrelevement;
    }

    /**
     * Set dateEnvoi
     *
     * @param string $dateEnvoi
     *
     * @return PesLots
     */
    public function setDateEnvoi($dateEnvoi)
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    /**
     * Get dateEnvoi
     *
     * @return string
     */
    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }

    /**
     * Set idBordereau
     *
     * @param string $idBordereau
     *
     * @return PesLots
     */
    public function setIdBordereau($idBordereau)
    {
        $this->idBordereau = $idBordereau;

        return $this;
    }

    /**
     * Get idBordereau
     *
     * @return string
     */
    public function getIdBordereau()
    {
        return $this->idBordereau;
    }

    /**
     * Set idPoste
     *
     * @param string $idPoste
     *
     * @return PesLots
     */
    public function setIdPoste($idPoste)
    {
        $this->idPoste = $idPoste;

        return $this;
    }

    /**
     * Get idPoste
     *
     * @return string
     */
    public function getIdPoste()
    {
        return $this->idPoste;
    }

    /**
     * Set idCollectivite
     *
     * @param string $idCollectivite
     *
     * @return PesLots
     */
    public function setIdCollectivite($idCollectivite)
    {
        $this->idCollectivite = $idCollectivite;

        return $this;
    }

    /**
     * Get idCollectivite
     *
     * @return string
     */
    public function getIdCollectivite()
    {
        return $this->idCollectivite;
    }

    /**
     * Set codeCollectivite
     *
     * @param string $codeCollectivite
     *
     * @return PesLots
     */
    public function setCodeCollectivite($codeCollectivite)
    {
        $this->codeCollectivite = $codeCollectivite;

        return $this;
    }

    /**
     * Get codeCollectivite
     *
     * @return string
     */
    public function getCodeCollectivite()
    {
        return $this->codeCollectivite;
    }

    /**
     * Set codeBudget
     *
     * @param string $codeBudget
     *
     * @return PesLots
     */
    public function setCodeBudget($codeBudget)
    {
        $this->codeBudget = $codeBudget;

        return $this;
    }

    /**
     * Get codeBudget
     *
     * @return string
     */
    public function getCodeBudget()
    {
        return $this->codeBudget;
    }

    /**
     * Set codeProdloc
     *
     * @param string $codeProdloc
     *
     * @return PesLots
     */
    public function setCodeProdloc($codeProdloc)
    {
        $this->codeProdloc = $codeProdloc;

        return $this;
    }

    /**
     * Get codeProdloc
     *
     * @return string
     */
    public function getCodeProdloc()
    {
        return $this->codeProdloc;
    }

    /**
     * Set prelevementLibelle
     *
     * @param string $prelevementLibelle
     *
     * @return PesLots
     */
    public function setPrelevementLibelle($prelevementLibelle)
    {
        $this->prelevementLibelle = $prelevementLibelle;

        return $this;
    }

    /**
     * Get prelevementLibelle
     *
     * @return string
     */
    public function getPrelevementLibelle()
    {
        return $this->prelevementLibelle;
    }

    /**
     * Set objetPiece
     *
     * @param string $objetPiece
     *
     * @return PesLots
     */
    public function setObjetPiece($objetPiece)
    {
        $this->objetPiece = $objetPiece;

        return $this;
    }

    /**
     * Get objetPiece
     *
     * @return string
     */
    public function getObjetPiece()
    {
        return $this->objetPiece;
    }
}
