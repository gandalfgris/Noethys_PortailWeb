<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unites
 *
 * @ORM\Table(name="unites")
 * @ORM\Entity
 */
class Unites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idunite;

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
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_debut", type="string", length=10, nullable=true)
     */
    private $heureDebut;

    /**
     * @var integer
     *
     * @ORM\Column(name="heure_debut_fixe", type="integer", nullable=true)
     */
    private $heureDebutFixe;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_fin", type="string", length=10, nullable=true)
     */
    private $heureFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="heure_fin_fixe", type="integer", nullable=true)
     */
    private $heureFinFixe;

    /**
     * @var integer
     *
     * @ORM\Column(name="repas", type="integer", nullable=true)
     */
    private $repas;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDrestaurateur", type="integer", nullable=true)
     */
    private $idrestaurateur;

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
     * @ORM\Column(name="touche_raccourci", type="string", length=30, nullable=true)
     */
    private $toucheRaccourci;

    /**
     * @var integer
     *
     * @ORM\Column(name="largeur", type="integer", nullable=true)
     */
    private $largeur;

    /**
     * @var string
     *
     * @ORM\Column(name="coeff", type="string", length=50, nullable=true)
     */
    private $coeff;

    /**
     * @var integer
     *
     * @ORM\Column(name="autogen_active", type="integer", nullable=true)
     */
    private $autogenActive;

    /**
     * @var string
     *
     * @ORM\Column(name="autogen_conditions", type="text", length=65535, nullable=true)
     */
    private $autogenConditions;

    /**
     * @var string
     *
     * @ORM\Column(name="autogen_parametres", type="text", length=65535, nullable=true)
     */
    private $autogenParametres;


}

