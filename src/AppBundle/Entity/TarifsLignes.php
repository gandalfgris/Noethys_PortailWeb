<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TarifsLignes
 *
 * @ORM\Table(name="tarifs_lignes")
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


}

