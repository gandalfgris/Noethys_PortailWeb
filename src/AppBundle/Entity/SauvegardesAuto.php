<?php

namespace AppBundle\Entity;

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


}

