<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarifs
 *
 * @ORM\Table(name="tarifs")
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


}

