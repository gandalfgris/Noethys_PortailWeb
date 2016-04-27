<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activites
 *
 * @ORM\Table(name="activites")
 * @ORM\Entity
 */
class Activites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="abrege", type="string", length=50, nullable=true)
     */
    private $abrege;

    /**
     * @var integer
     *
     * @ORM\Column(name="coords_org", type="integer", nullable=true)
     */
    private $coordsOrg;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=200, nullable=true)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=100, nullable=true)
     */
    private $site;

    /**
     * @var integer
     *
     * @ORM\Column(name="logo_org", type="integer", nullable=true)
     */
    private $logoOrg;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="blob", nullable=true)
     */
    private $logo;

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
     * @var string
     *
     * @ORM\Column(name="public", type="string", length=20, nullable=true)
     */
    private $public;

    /**
     * @var integer
     *
     * @ORM\Column(name="vaccins_obligatoires", type="integer", nullable=true)
     */
    private $vaccinsObligatoires;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation", type="string", length=10, nullable=true)
     */
    private $dateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_inscrits_max", type="integer", nullable=true)
     */
    private $nbreInscritsMax;

    /**
     * @var string
     *
     * @ORM\Column(name="code_comptable", type="text", length=65535, nullable=true)
     */
    private $codeComptable;

    /**
     * @var integer
     *
     * @ORM\Column(name="psu_activation", type="integer", nullable=true)
     */
    private $psuActivation;

    /**
     * @var integer
     *
     * @ORM\Column(name="psu_unite_prevision", type="integer", nullable=true)
     */
    private $psuUnitePrevision;

    /**
     * @var integer
     *
     * @ORM\Column(name="psu_unite_presence", type="integer", nullable=true)
     */
    private $psuUnitePresence;

    /**
     * @var integer
     *
     * @ORM\Column(name="psu_tarif_forfait", type="integer", nullable=true)
     */
    private $psuTarifForfait;

    /**
     * @var integer
     *
     * @ORM\Column(name="psu_etiquette_rtt", type="integer", nullable=true)
     */
    private $psuEtiquetteRtt;


}

