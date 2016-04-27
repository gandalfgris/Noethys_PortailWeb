<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitesRemplissage
 *
 * @ORM\Table(name="unites_remplissage")
 * @ORM\Entity
 */
class UnitesRemplissage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_remplissage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniteRemplissage;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;

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
     * @ORM\Column(name="seuil_alerte", type="integer", nullable=true)
     */
    private $seuilAlerte;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_min", type="string", length=10, nullable=true)
     */
    private $heureMin;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_max", type="string", length=10, nullable=true)
     */
    private $heureMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="afficher_page_accueil", type="integer", nullable=true)
     */
    private $afficherPageAccueil;

    /**
     * @var integer
     *
     * @ORM\Column(name="afficher_grille_conso", type="integer", nullable=true)
     */
    private $afficherGrilleConso;

    /**
     * @var string
     *
     * @ORM\Column(name="etiquettes", type="text", length=65535, nullable=true)
     */
    private $etiquettes;


}

