<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CotisationsActivites
 *
 * @ORM\Table(name="cotisations_activites")
 * @ORM\Entity
 */
class CotisationsActivites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcotisation_activite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcotisationActivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_cotisation", type="integer", nullable=true)
     */
    private $idtypeCotisation;


}

