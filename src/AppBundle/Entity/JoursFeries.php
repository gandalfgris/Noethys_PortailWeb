<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JoursFeries
 *
 * @ORM\Table(name="jours_feries")
 * @ORM\Entity
 */
class JoursFeries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDferie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idferie;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="jour", type="integer", nullable=true)
     */
    private $jour;

    /**
     * @var integer
     *
     * @ORM\Column(name="mois", type="integer", nullable=true)
     */
    private $mois;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer", nullable=true)
     */
    private $annee;


}

