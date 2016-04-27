<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepotsCotisations
 *
 * @ORM\Table(name="depots_cotisations")
 * @ORM\Entity
 */
class DepotsCotisations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDdepot_cotisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddepotCotisation;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillage", type="integer", nullable=true)
     */
    private $verrouillage;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;


}

