<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AidesMontants
 *
 * @ORM\Table(name="aides_montants")
 * @ORM\Entity
 */
class AidesMontants
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide_montant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaideMontant;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide", type="integer", nullable=true)
     */
    private $idaide;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;


}

