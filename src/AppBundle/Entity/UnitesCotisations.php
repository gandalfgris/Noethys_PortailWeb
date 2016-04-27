<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitesCotisations
 *
 * @ORM\Table(name="unites_cotisations")
 * @ORM\Entity
 */
class UnitesCotisations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_cotisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniteCotisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_cotisation", type="integer", nullable=true)
     */
    private $idtypeCotisation;

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
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="label_prestation", type="string", length=200, nullable=true)
     */
    private $labelPrestation;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;


}

