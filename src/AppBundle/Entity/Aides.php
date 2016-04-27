<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aides
 *
 * @ORM\Table(name="aides")
 * @ORM\Entity
 */
class Aides
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaide;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
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
     * @ORM\Column(name="IDcaisse", type="integer", nullable=true)
     */
    private $idcaisse;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_max", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_dates_max", type="integer", nullable=true)
     */
    private $nbreDatesMax;


}

