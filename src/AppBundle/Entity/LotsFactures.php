<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LotsFactures
 *
 * @ORM\Table(name="lots_factures")
 * @ORM\Entity
 */
class LotsFactures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDlot", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlot;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;


}

