<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaTiers
 *
 * @ORM\Table(name="compta_tiers")
 * @ORM\Entity
 */
class ComptaTiers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtiers", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtiers;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcode_comptable", type="integer", nullable=true)
     */
    private $idcodeComptable;


}

