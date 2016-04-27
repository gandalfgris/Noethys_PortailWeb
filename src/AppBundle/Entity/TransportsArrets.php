<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransportsArrets
 *
 * @ORM\Table(name="transports_arrets")
 * @ORM\Entity
 */
class TransportsArrets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDarret", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarret;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDligne", type="integer", nullable=true)
     */
    private $idligne;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;


}

