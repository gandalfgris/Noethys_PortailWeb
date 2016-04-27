<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BadgeageActions
 *
 * @ORM\Table(name="badgeage_actions")
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
     * @ORM\Column(name="IDprocedure", type="integer", nullable=true)
     */
    private $idprocedure;

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


}

