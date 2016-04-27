<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transports
 *
 * @ORM\Table(name="transports")
 * @ORM\Entity
 */
class Transports
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtransport", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtransport;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=100, nullable=true)
     */
    private $mode;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=100, nullable=true)
     */
    private $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompagnie", type="integer", nullable=true)
     */
    private $idcompagnie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDligne", type="integer", nullable=true)
     */
    private $idligne;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=200, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text", length=65535, nullable=true)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="depart_date", type="string", length=10, nullable=true)
     */
    private $departDate;

    /**
     * @var string
     *
     * @ORM\Column(name="depart_heure", type="string", length=10, nullable=true)
     */
    private $departHeure;

    /**
     * @var integer
     *
     * @ORM\Column(name="depart_IDarret", type="integer", nullable=true)
     */
    private $departIdarret;

    /**
     * @var integer
     *
     * @ORM\Column(name="depart_IDlieu", type="integer", nullable=true)
     */
    private $departIdlieu;

    /**
     * @var string
     *
     * @ORM\Column(name="depart_localisation", type="text", length=65535, nullable=true)
     */
    private $departLocalisation;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee_date", type="string", length=10, nullable=true)
     */
    private $arriveeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee_heure", type="string", length=10, nullable=true)
     */
    private $arriveeHeure;

    /**
     * @var integer
     *
     * @ORM\Column(name="arrivee_IDarret", type="integer", nullable=true)
     */
    private $arriveeIdarret;

    /**
     * @var integer
     *
     * @ORM\Column(name="arrivee_IDlieu", type="integer", nullable=true)
     */
    private $arriveeIdlieu;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee_localisation", type="text", length=65535, nullable=true)
     */
    private $arriveeLocalisation;

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
     * @ORM\Column(name="actif", type="integer", nullable=true)
     */
    private $actif;

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
     * @ORM\Column(name="unites", type="text", length=65535, nullable=true)
     */
    private $unites;

    /**
     * @var integer
     *
     * @ORM\Column(name="prog", type="integer", nullable=true)
     */
    private $prog;


}

