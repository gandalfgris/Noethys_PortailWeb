<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vaccins
 *
 * @ORM\Table(name="vaccins")
 * @ORM\Entity
 */
class Vaccins
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDvaccin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvaccin;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_vaccin", type="integer", nullable=true)
     */
    private $idtypeVaccin;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;


}

