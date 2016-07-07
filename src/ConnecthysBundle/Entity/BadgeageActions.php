<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BadgeageActions
 *
 * @ORM\Table(name="badgeage_actions", indexes={@ORM\Index(name="IDprocedure", columns={"IDprocedure"})})
 * @ORM\Entity
 */
class BadgeageActions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaction;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_activite", type="text", length=65535, nullable=true)
     */
    private $conditionActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_heure", type="text", length=65535, nullable=true)
     */
    private $conditionHeure;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_periode", type="text", length=65535, nullable=true)
     */
    private $conditionPeriode;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_poste", type="text", length=65535, nullable=true)
     */
    private $conditionPoste;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_questionnaire", type="text", length=65535, nullable=true)
     */
    private $conditionQuestionnaire;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="text", length=65535, nullable=true)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="action_activite", type="text", length=65535, nullable=true)
     */
    private $actionActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="action_unite", type="text", length=65535, nullable=true)
     */
    private $actionUnite;

    /**
     * @var string
     *
     * @ORM\Column(name="action_etat", type="text", length=65535, nullable=true)
     */
    private $actionEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="action_demande", type="string", length=40, nullable=true)
     */
    private $actionDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="action_heure_debut", type="text", length=65535, nullable=true)
     */
    private $actionHeureDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="action_heure_fin", type="text", length=65535, nullable=true)
     */
    private $actionHeureFin;

    /**
     * @var string
     *
     * @ORM\Column(name="action_message", type="text", length=65535, nullable=true)
     */
    private $actionMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="action_icone", type="text", length=65535, nullable=true)
     */
    private $actionIcone;

    /**
     * @var string
     *
     * @ORM\Column(name="action_duree", type="string", length=50, nullable=true)
     */
    private $actionDuree;

    /**
     * @var string
     *
     * @ORM\Column(name="action_frequence", type="text", length=65535, nullable=true)
     */
    private $actionFrequence;

    /**
     * @var string
     *
     * @ORM\Column(name="action_vocal", type="text", length=65535, nullable=true)
     */
    private $actionVocal;

    /**
     * @var string
     *
     * @ORM\Column(name="action_question", type="text", length=65535, nullable=true)
     */
    private $actionQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="action_date", type="text", length=65535, nullable=true)
     */
    private $actionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="action_attente", type="text", length=65535, nullable=true)
     */
    private $actionAttente;

    /**
     * @var string
     *
     * @ORM\Column(name="action_ticket", type="text", length=65535, nullable=true)
     */
    private $actionTicket;

    /**
     * @var \BadgeageProcedures
     *
     * @ORM\ManyToOne(targetEntity="BadgeageProcedures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDprocedure", referencedColumnName="IDprocedure")
     * })
     */
    private $idprocedure;



    /**
     * Get idaction
     *
     * @return integer
     */
    public function getIdaction()
    {
        return $this->idaction;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return BadgeageActions
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set conditionActivite
     *
     * @param string $conditionActivite
     *
     * @return BadgeageActions
     */
    public function setConditionActivite($conditionActivite)
    {
        $this->conditionActivite = $conditionActivite;

        return $this;
    }

    /**
     * Get conditionActivite
     *
     * @return string
     */
    public function getConditionActivite()
    {
        return $this->conditionActivite;
    }

    /**
     * Set conditionHeure
     *
     * @param string $conditionHeure
     *
     * @return BadgeageActions
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
     * Set conditionPeriode
     *
     * @param string $conditionPeriode
     *
     * @return BadgeageActions
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
     * Set conditionPoste
     *
     * @param string $conditionPoste
     *
     * @return BadgeageActions
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
     * Set conditionQuestionnaire
     *
     * @param string $conditionQuestionnaire
     *
     * @return BadgeageActions
     */
    public function setConditionQuestionnaire($conditionQuestionnaire)
    {
        $this->conditionQuestionnaire = $conditionQuestionnaire;

        return $this;
    }

    /**
     * Get conditionQuestionnaire
     *
     * @return string
     */
    public function getConditionQuestionnaire()
    {
        return $this->conditionQuestionnaire;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return BadgeageActions
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set actionActivite
     *
     * @param string $actionActivite
     *
     * @return BadgeageActions
     */
    public function setActionActivite($actionActivite)
    {
        $this->actionActivite = $actionActivite;

        return $this;
    }

    /**
     * Get actionActivite
     *
     * @return string
     */
    public function getActionActivite()
    {
        return $this->actionActivite;
    }

    /**
     * Set actionUnite
     *
     * @param string $actionUnite
     *
     * @return BadgeageActions
     */
    public function setActionUnite($actionUnite)
    {
        $this->actionUnite = $actionUnite;

        return $this;
    }

    /**
     * Get actionUnite
     *
     * @return string
     */
    public function getActionUnite()
    {
        return $this->actionUnite;
    }

    /**
     * Set actionEtat
     *
     * @param string $actionEtat
     *
     * @return BadgeageActions
     */
    public function setActionEtat($actionEtat)
    {
        $this->actionEtat = $actionEtat;

        return $this;
    }

    /**
     * Get actionEtat
     *
     * @return string
     */
    public function getActionEtat()
    {
        return $this->actionEtat;
    }

    /**
     * Set actionDemande
     *
     * @param string $actionDemande
     *
     * @return BadgeageActions
     */
    public function setActionDemande($actionDemande)
    {
        $this->actionDemande = $actionDemande;

        return $this;
    }

    /**
     * Get actionDemande
     *
     * @return string
     */
    public function getActionDemande()
    {
        return $this->actionDemande;
    }

    /**
     * Set actionHeureDebut
     *
     * @param string $actionHeureDebut
     *
     * @return BadgeageActions
     */
    public function setActionHeureDebut($actionHeureDebut)
    {
        $this->actionHeureDebut = $actionHeureDebut;

        return $this;
    }

    /**
     * Get actionHeureDebut
     *
     * @return string
     */
    public function getActionHeureDebut()
    {
        return $this->actionHeureDebut;
    }

    /**
     * Set actionHeureFin
     *
     * @param string $actionHeureFin
     *
     * @return BadgeageActions
     */
    public function setActionHeureFin($actionHeureFin)
    {
        $this->actionHeureFin = $actionHeureFin;

        return $this;
    }

    /**
     * Get actionHeureFin
     *
     * @return string
     */
    public function getActionHeureFin()
    {
        return $this->actionHeureFin;
    }

    /**
     * Set actionMessage
     *
     * @param string $actionMessage
     *
     * @return BadgeageActions
     */
    public function setActionMessage($actionMessage)
    {
        $this->actionMessage = $actionMessage;

        return $this;
    }

    /**
     * Get actionMessage
     *
     * @return string
     */
    public function getActionMessage()
    {
        return $this->actionMessage;
    }

    /**
     * Set actionIcone
     *
     * @param string $actionIcone
     *
     * @return BadgeageActions
     */
    public function setActionIcone($actionIcone)
    {
        $this->actionIcone = $actionIcone;

        return $this;
    }

    /**
     * Get actionIcone
     *
     * @return string
     */
    public function getActionIcone()
    {
        return $this->actionIcone;
    }

    /**
     * Set actionDuree
     *
     * @param string $actionDuree
     *
     * @return BadgeageActions
     */
    public function setActionDuree($actionDuree)
    {
        $this->actionDuree = $actionDuree;

        return $this;
    }

    /**
     * Get actionDuree
     *
     * @return string
     */
    public function getActionDuree()
    {
        return $this->actionDuree;
    }

    /**
     * Set actionFrequence
     *
     * @param string $actionFrequence
     *
     * @return BadgeageActions
     */
    public function setActionFrequence($actionFrequence)
    {
        $this->actionFrequence = $actionFrequence;

        return $this;
    }

    /**
     * Get actionFrequence
     *
     * @return string
     */
    public function getActionFrequence()
    {
        return $this->actionFrequence;
    }

    /**
     * Set actionVocal
     *
     * @param string $actionVocal
     *
     * @return BadgeageActions
     */
    public function setActionVocal($actionVocal)
    {
        $this->actionVocal = $actionVocal;

        return $this;
    }

    /**
     * Get actionVocal
     *
     * @return string
     */
    public function getActionVocal()
    {
        return $this->actionVocal;
    }

    /**
     * Set actionQuestion
     *
     * @param string $actionQuestion
     *
     * @return BadgeageActions
     */
    public function setActionQuestion($actionQuestion)
    {
        $this->actionQuestion = $actionQuestion;

        return $this;
    }

    /**
     * Get actionQuestion
     *
     * @return string
     */
    public function getActionQuestion()
    {
        return $this->actionQuestion;
    }

    /**
     * Set actionDate
     *
     * @param string $actionDate
     *
     * @return BadgeageActions
     */
    public function setActionDate($actionDate)
    {
        $this->actionDate = $actionDate;

        return $this;
    }

    /**
     * Get actionDate
     *
     * @return string
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }

    /**
     * Set actionAttente
     *
     * @param string $actionAttente
     *
     * @return BadgeageActions
     */
    public function setActionAttente($actionAttente)
    {
        $this->actionAttente = $actionAttente;

        return $this;
    }

    /**
     * Get actionAttente
     *
     * @return string
     */
    public function getActionAttente()
    {
        return $this->actionAttente;
    }

    /**
     * Set actionTicket
     *
     * @param string $actionTicket
     *
     * @return BadgeageActions
     */
    public function setActionTicket($actionTicket)
    {
        $this->actionTicket = $actionTicket;

        return $this;
    }

    /**
     * Get actionTicket
     *
     * @return string
     */
    public function getActionTicket()
    {
        return $this->actionTicket;
    }

    /**
     * Set idprocedure
     *
     * @param \ConnecthysBundle\Entity\BadgeageProcedures $idprocedure
     *
     * @return BadgeageActions
     */
    public function setIdprocedure(\ConnecthysBundle\Entity\BadgeageProcedures $idprocedure = null)
    {
        $this->idprocedure = $idprocedure;

        return $this;
    }

    /**
     * Get idprocedure
     *
     * @return \ConnecthysBundle\Entity\BadgeageProcedures
     */
    public function getIdprocedure()
    {
        return $this->idprocedure;
    }
}
