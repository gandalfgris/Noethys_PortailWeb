<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regimes
 *
 * @ORM\Table(name="regimes")
 * @ORM\Entity
 */
class Regimes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDregime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idregime;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;


}

