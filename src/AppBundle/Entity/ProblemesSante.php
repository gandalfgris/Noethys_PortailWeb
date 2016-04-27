<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProblemesSante
 *
 * @ORM\Table(name="problemes_sante")
 * @ORM\Entity
 */
class ProblemesSante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDprobleme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprobleme;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype", type="integer", nullable=true)
     */
    private $idtype;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=100, nullable=true)
     */
    private $intitule;

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
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="traitement_medical", type="integer", nullable=true)
     */
    private $traitementMedical;

    /**
     * @var string
     *
     * @ORM\Column(name="description_traitement", type="text", length=65535, nullable=true)
     */
    private $descriptionTraitement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut_traitement", type="string", length=10, nullable=true)
     */
    private $dateDebutTraitement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin_traitement", type="string", length=10, nullable=true)
     */
    private $dateFinTraitement;

    /**
     * @var integer
     *
     * @ORM\Column(name="eviction", type="integer", nullable=true)
     */
    private $eviction;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut_eviction", type="string", length=10, nullable=true)
     */
    private $dateDebutEviction;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin_eviction", type="string", length=10, nullable=true)
     */
    private $dateFinEviction;

    /**
     * @var integer
     *
     * @ORM\Column(name="diffusion_listing_enfants", type="integer", nullable=true)
     */
    private $diffusionListingEnfants;

    /**
     * @var integer
     *
     * @ORM\Column(name="diffusion_listing_conso", type="integer", nullable=true)
     */
    private $diffusionListingConso;

    /**
     * @var integer
     *
     * @ORM\Column(name="diffusion_listing_repas", type="integer", nullable=true)
     */
    private $diffusionListingRepas;


}

