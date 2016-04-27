<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnements
 *
 * @ORM\Table(name="abonnements")
 * @ORM\Entity
 */
class Abonnements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDabonnement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idabonnement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDliste", type="integer", nullable=true)
     */
    private $idliste;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;


}

