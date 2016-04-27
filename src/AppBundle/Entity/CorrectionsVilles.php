<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrectionsVilles
 *
 * @ORM\Table(name="corrections_villes")
 * @ORM\Entity
 */
class CorrectionsVilles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcorrection", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcorrection;

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=100, nullable=true)
     */
    private $mode;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDville", type="integer", nullable=true)
     */
    private $idville;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=100, nullable=true)
     */
    private $cp;


}

