<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SauvegardesAuto
 *
 * @ORM\Table(name="sauvegardes_auto")
 * @ORM\Entity
 */
class SauvegardesAuto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDsauvegarde", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsauvegarde;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="date_derniere", type="string", length=10, nullable=true)
     */
    private $dateDerniere;

    /**
     * @var string
     *
     * @ORM\Column(name="sauvegarde_nom", type="text", length=65535, nullable=true)
     */
    private $sauvegardeNom;

    /**
     * @var string
     *
     * @ORM\Column(name="sauvegarde_motdepasse", type="text", length=65535, nullable=true)
     */
    private $sauvegardeMotdepasse;

    /**
     * @var string
     *
     * @ORM\Column(name="sauvegarde_repertoire", type="text", length=65535, nullable=true)
     */
    private $sauvegardeRepertoire;

    /**
     * @var string
     *
     * @ORM\Column(name="sauvegarde_emails", type="text", length=65535, nullable=true)
     */
    private $sauvegardeEmails;

    /**
     * @var string
     *
     * @ORM\Column(name="sauvegarde_fichiers_locaux", type="text", length=65535, nullable=true)
     */
    private $sauvegardeFichiersLocaux;

    /**
     * @var string
     *
     * @ORM\Column(name="sauvegarde_fichiers_reseau", type="text", length=65535, nullable=true)
     */
    private $sauvegardeFichiersReseau;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_jours_scolaires", type="text", length=65535, nullable=true)
     */
    private $conditionJoursScolaires;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_jours_vacances", type="text", length=65535, nullable=true)
     */
    private $conditionJoursVacances;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_heure", type="text", length=65535, nullable=true)
     */
    private $conditionHeure;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_poste", type="text", length=65535, nullable=true)
     */
    private $conditionPoste;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_derniere", type="text", length=65535, nullable=true)
     */
    private $conditionDerniere;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_utilisateur", type="text", length=65535, nullable=true)
     */
    private $conditionUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="option_afficher_interface", type="text", length=65535, nullable=true)
     */
    private $optionAfficherInterface;

    /**
     * @var string
     *
     * @ORM\Column(name="option_demander", type="text", length=65535, nullable=true)
     */
    private $optionDemander;

    /**
     * @var string
     *
     * @ORM\Column(name="option_confirmation", type="text", length=65535, nullable=true)
     */
    private $optionConfirmation;

    /**
     * @var string
     *
     * @ORM\Column(name="option_suppression", type="text", length=65535, nullable=true)
     */
    private $optionSuppression;



    /**
     * Get idsauvegarde
     *
     * @return integer
     */
    public function getIdsauvegarde()
    {
        return $this->idsauvegarde;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return SauvegardesAuto
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
     * @return SauvegardesAuto
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
     * Set dateDerniere
     *
     * @param string $dateDerniere
     *
     * @return SauvegardesAuto
     */
    public function setDateDerniere($dateDerniere)
    {
        $this->dateDerniere = $dateDerniere;

        return $this;
    }

    /**
     * Get dateDerniere
     *
     * @return string
     */
    public function getDateDerniere()
    {
        return $this->dateDerniere;
    }

    /**
     * Set sauvegardeNom
     *
     * @param string $sauvegardeNom
     *
     * @return SauvegardesAuto
     */
    public function setSauvegardeNom($sauvegardeNom)
    {
        $this->sauvegardeNom = $sauvegardeNom;

        return $this;
    }

    /**
     * Get sauvegardeNom
     *
     * @return string
     */
    public function getSauvegardeNom()
    {
        return $this->sauvegardeNom;
    }

    /**
     * Set sauvegardeMotdepasse
     *
     * @param string $sauvegardeMotdepasse
     *
     * @return SauvegardesAuto
     */
    public function setSauvegardeMotdepasse($sauvegardeMotdepasse)
    {
        $this->sauvegardeMotdepasse = $sauvegardeMotdepasse;

        return $this;
    }

    /**
     * Get sauvegardeMotdepasse
     *
     * @return string
     */
    public function getSauvegardeMotdepasse()
    {
        return $this->sauvegardeMotdepasse;
    }

    /**
     * Set sauvegardeRepertoire
     *
     * @param string $sauvegardeRepertoire
     *
     * @return SauvegardesAuto
     */
    public function setSauvegardeRepertoire($sauvegardeRepertoire)
    {
        $this->sauvegardeRepertoire = $sauvegardeRepertoire;

        return $this;
    }

    /**
     * Get sauvegardeRepertoire
     *
     * @return string
     */
    public function getSauvegardeRepertoire()
    {
        return $this->sauvegardeRepertoire;
    }

    /**
     * Set sauvegardeEmails
     *
     * @param string $sauvegardeEmails
     *
     * @return SauvegardesAuto
     */
    public function setSauvegardeEmails($sauvegardeEmails)
    {
        $this->sauvegardeEmails = $sauvegardeEmails;

        return $this;
    }

    /**
     * Get sauvegardeEmails
     *
     * @return string
     */
    public function getSauvegardeEmails()
    {
        return $this->sauvegardeEmails;
    }

    /**
     * Set sauvegardeFichiersLocaux
     *
     * @param string $sauvegardeFichiersLocaux
     *
     * @return SauvegardesAuto
     */
    public function setSauvegardeFichiersLocaux($sauvegardeFichiersLocaux)
    {
        $this->sauvegardeFichiersLocaux = $sauvegardeFichiersLocaux;

        return $this;
    }

    /**
     * Get sauvegardeFichiersLocaux
     *
     * @return string
     */
    public function getSauvegardeFichiersLocaux()
    {
        return $this->sauvegardeFichiersLocaux;
    }

    /**
     * Set sauvegardeFichiersReseau
     *
     * @param string $sauvegardeFichiersReseau
     *
     * @return SauvegardesAuto
     */
    public function setSauvegardeFichiersReseau($sauvegardeFichiersReseau)
    {
        $this->sauvegardeFichiersReseau = $sauvegardeFichiersReseau;

        return $this;
    }

    /**
     * Get sauvegardeFichiersReseau
     *
     * @return string
     */
    public function getSauvegardeFichiersReseau()
    {
        return $this->sauvegardeFichiersReseau;
    }

    /**
     * Set conditionJoursScolaires
     *
     * @param string $conditionJoursScolaires
     *
     * @return SauvegardesAuto
     */
    public function setConditionJoursScolaires($conditionJoursScolaires)
    {
        $this->conditionJoursScolaires = $conditionJoursScolaires;

        return $this;
    }

    /**
     * Get conditionJoursScolaires
     *
     * @return string
     */
    public function getConditionJoursScolaires()
    {
        return $this->conditionJoursScolaires;
    }

    /**
     * Set conditionJoursVacances
     *
     * @param string $conditionJoursVacances
     *
     * @return SauvegardesAuto
     */
    public function setConditionJoursVacances($conditionJoursVacances)
    {
        $this->conditionJoursVacances = $conditionJoursVacances;

        return $this;
    }

    /**
     * Get conditionJoursVacances
     *
     * @return string
     */
    public function getConditionJoursVacances()
    {
        return $this->conditionJoursVacances;
    }

    /**
     * Set conditionHeure
     *
     * @param string $conditionHeure
     *
     * @return SauvegardesAuto
     */
    public function setConditionHeure($conditionHeure)
    {
        $this->conditionHeure = $conditionHeure;

        return $this;
    }

    /**
     * Get conditionHeure
     *
     * @return string
     */
    public function getConditionHeure()
    {
        return $this->conditionHeure;
    }

    /**
     * Set conditionPoste
     *
     * @param string $conditionPoste
     *
     * @return SauvegardesAuto
     */
    public function setConditionPoste($conditionPoste)
    {
        $this->conditionPoste = $conditionPoste;

        return $this;
    }

    /**
     * Get conditionPoste
     *
     * @return string
     */
    public function getConditionPoste()
    {
        return $this->conditionPoste;
    }

    /**
     * Set conditionDerniere
     *
     * @param string $conditionDerniere
     *
     * @return SauvegardesAuto
     */
    public function setConditionDerniere($conditionDerniere)
    {
        $this->conditionDerniere = $conditionDerniere;

        return $this;
    }

    /**
     * Get conditionDerniere
     *
     * @return string
     */
    public function getConditionDerniere()
    {
        return $this->conditionDerniere;
    }

    /**
     * Set conditionUtilisateur
     *
     * @param string $conditionUtilisateur
     *
     * @return SauvegardesAuto
     */
    public function setConditionUtilisateur($conditionUtilisateur)
    {
        $this->conditionUtilisateur = $conditionUtilisateur;

        return $this;
    }

    /**
     * Get conditionUtilisateur
     *
     * @return string
     */
    public function getConditionUtilisateur()
    {
        return $this->conditionUtilisateur;
    }

    /**
     * Set optionAfficherInterface
     *
     * @param string $optionAfficherInterface
     *
     * @return SauvegardesAuto
     */
    public function setOptionAfficherInterface($optionAfficherInterface)
    {
        $this->optionAfficherInterface = $optionAfficherInterface;

        return $this;
    }

    /**
     * Get optionAfficherInterface
     *
     * @return string
     */
    public function getOptionAfficherInterface()
    {
        return $this->optionAfficherInterface;
    }

    /**
     * Set optionDemander
     *
     * @param string $optionDemander
     *
     * @return SauvegardesAuto
     */
    public function setOptionDemander($optionDemander)
    {
        $this->optionDemander = $optionDemander;

        return $this;
    }

    /**
     * Get optionDemander
     *
     * @return string
     */
    public function getOptionDemander()
    {
        return $this->optionDemander;
    }

    /**
     * Set optionConfirmation
     *
     * @param string $optionConfirmation
     *
     * @return SauvegardesAuto
     */
    public function setOptionConfirmation($optionConfirmation)
    {
        $this->optionConfirmation = $optionConfirmation;

        return $this;
    }

    /**
     * Get optionConfirmation
     *
     * @return string
     */
    public function getOptionConfirmation()
    {
        return $this->optionConfirmation;
    }

    /**
     * Set optionSuppression
     *
     * @param string $optionSuppression
     *
     * @return SauvegardesAuto
     */
    public function setOptionSuppression($optionSuppression)
    {
        $this->optionSuppression = $optionSuppression;

        return $this;
    }

    /**
     * Get optionSuppression
     *
     * @return string
     */
    public function getOptionSuppression()
    {
        return $this->optionSuppression;
    }
}
