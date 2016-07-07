<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglements
 *
 * @ORM\Table(name="reglements", indexes={@ORM\Index(name="index_reglements_IDcompte_payeur", columns={"IDcompte_payeur"}), @ORM\Index(name="IDmode", columns={"IDmode"}), @ORM\Index(name="IDemetteur", columns={"IDemetteur"}), @ORM\Index(name="IDpayeur", columns={"IDpayeur"}), @ORM\Index(name="IDprestation_frais", columns={"IDprestation_frais"}), @ORM\Index(name="IDcompte", columns={"IDcompte"}), @ORM\Index(name="IDdepot", columns={"IDdepot"}), @ORM\Index(name="IDutilisateur", columns={"IDutilisateur"}), @ORM\Index(name="IDprelevement", columns={"IDprelevement"}), @ORM\Index(name="IDpiece", columns={"IDpiece"})})
 * @ORM\Entity
 */
class Reglements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDreglement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreglement;

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
     * @var integer
     *
     * @ORM\Column(name="IDmode", type="integer", nullable=true)
     */
    private $idmode;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDemetteur", type="integer", nullable=true)
     */
    private $idemetteur;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_piece", type="string", length=30, nullable=true)
     */
    private $numeroPiece;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDpayeur", type="integer", nullable=true)
     */
    private $idpayeur;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="string", length=200, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_quittancier", type="string", length=30, nullable=true)
     */
    private $numeroQuittancier;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDprestation_frais", type="integer", nullable=true)
     */
    private $idprestationFrais;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte", type="integer", nullable=true)
     */
    private $idcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="date_differe", type="string", length=10, nullable=true)
     */
    private $dateDiffere;

    /**
     * @var integer
     *
     * @ORM\Column(name="encaissement_attente", type="integer", nullable=true)
     */
    private $encaissementAttente;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDdepot", type="integer", nullable=true)
     */
    private $iddepot;

    /**
     * @var string
     *
     * @ORM\Column(name="date_saisie", type="string", length=10, nullable=true)
     */
    private $dateSaisie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDprelevement", type="integer", nullable=true)
     */
    private $idprelevement;

    /**
     * @var string
     *
     * @ORM\Column(name="avis_depot", type="string", length=10, nullable=true)
     */
    private $avisDepot;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDpiece", type="integer", nullable=true)
     */
    private $idpiece;



    /**
     * Get idreglement
     *
     * @return integer
     */
    public function getIdreglement()
    {
        return $this->idreglement;
    }

    /**
     * Set idcomptePayeur
     *
     * @param integer $idcomptePayeur
     *
     * @return Reglements
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
     * @return Reglements
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
     * Set idmode
     *
     * @param integer $idmode
     *
     * @return Reglements
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
     * Set idemetteur
     *
     * @param integer $idemetteur
     *
     * @return Reglements
     */
    public function setIdemetteur($idemetteur)
    {
        $this->idemetteur = $idemetteur;

        return $this;
    }

    /**
     * Get idemetteur
     *
     * @return integer
     */
    public function getIdemetteur()
    {
        return $this->idemetteur;
    }

    /**
     * Set numeroPiece
     *
     * @param string $numeroPiece
     *
     * @return Reglements
     */
    public function setNumeroPiece($numeroPiece)
    {
        $this->numeroPiece = $numeroPiece;

        return $this;
    }

    /**
     * Get numeroPiece
     *
     * @return string
     */
    public function getNumeroPiece()
    {
        return $this->numeroPiece;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Reglements
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
     * Set idpayeur
     *
     * @param integer $idpayeur
     *
     * @return Reglements
     */
    public function setIdpayeur($idpayeur)
    {
        $this->idpayeur = $idpayeur;

        return $this;
    }

    /**
     * Get idpayeur
     *
     * @return integer
     */
    public function getIdpayeur()
    {
        return $this->idpayeur;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return Reglements
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
     * Set numeroQuittancier
     *
     * @param string $numeroQuittancier
     *
     * @return Reglements
     */
    public function setNumeroQuittancier($numeroQuittancier)
    {
        $this->numeroQuittancier = $numeroQuittancier;

        return $this;
    }

    /**
     * Get numeroQuittancier
     *
     * @return string
     */
    public function getNumeroQuittancier()
    {
        return $this->numeroQuittancier;
    }

    /**
     * Set idprestationFrais
     *
     * @param integer $idprestationFrais
     *
     * @return Reglements
     */
    public function setIdprestationFrais($idprestationFrais)
    {
        $this->idprestationFrais = $idprestationFrais;

        return $this;
    }

    /**
     * Get idprestationFrais
     *
     * @return integer
     */
    public function getIdprestationFrais()
    {
        return $this->idprestationFrais;
    }

    /**
     * Set idcompte
     *
     * @param integer $idcompte
     *
     * @return Reglements
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
     * Set dateDiffere
     *
     * @param string $dateDiffere
     *
     * @return Reglements
     */
    public function setDateDiffere($dateDiffere)
    {
        $this->dateDiffere = $dateDiffere;

        return $this;
    }

    /**
     * Get dateDiffere
     *
     * @return string
     */
    public function getDateDiffere()
    {
        return $this->dateDiffere;
    }

    /**
     * Set encaissementAttente
     *
     * @param integer $encaissementAttente
     *
     * @return Reglements
     */
    public function setEncaissementAttente($encaissementAttente)
    {
        $this->encaissementAttente = $encaissementAttente;

        return $this;
    }

    /**
     * Get encaissementAttente
     *
     * @return integer
     */
    public function getEncaissementAttente()
    {
        return $this->encaissementAttente;
    }

    /**
     * Set iddepot
     *
     * @param integer $iddepot
     *
     * @return Reglements
     */
    public function setIddepot($iddepot)
    {
        $this->iddepot = $iddepot;

        return $this;
    }

    /**
     * Get iddepot
     *
     * @return integer
     */
    public function getIddepot()
    {
        return $this->iddepot;
    }

    /**
     * Set dateSaisie
     *
     * @param string $dateSaisie
     *
     * @return Reglements
     */
    public function setDateSaisie($dateSaisie)
    {
        $this->dateSaisie = $dateSaisie;

        return $this;
    }

    /**
     * Get dateSaisie
     *
     * @return string
     */
    public function getDateSaisie()
    {
        return $this->dateSaisie;
    }

    /**
     * Set idutilisateur
     *
     * @param integer $idutilisateur
     *
     * @return Reglements
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
     * Set idprelevement
     *
     * @param integer $idprelevement
     *
     * @return Reglements
     */
    public function setIdprelevement($idprelevement)
    {
        $this->idprelevement = $idprelevement;

        return $this;
    }

    /**
     * Get idprelevement
     *
     * @return integer
     */
    public function getIdprelevement()
    {
        return $this->idprelevement;
    }

    /**
     * Set avisDepot
     *
     * @param string $avisDepot
     *
     * @return Reglements
     */
    public function setAvisDepot($avisDepot)
    {
        $this->avisDepot = $avisDepot;

        return $this;
    }

    /**
     * Get avisDepot
     *
     * @return string
     */
    public function getAvisDepot()
    {
        return $this->avisDepot;
    }

    /**
     * Set idpiece
     *
     * @param integer $idpiece
     *
     * @return Reglements
     */
    public function setIdpiece($idpiece)
    {
        $this->idpiece = $idpiece;

        return $this;
    }

    /**
     * Get idpiece
     *
     * @return integer
     */
    public function getIdpiece()
    {
        return $this->idpiece;
    }
}
