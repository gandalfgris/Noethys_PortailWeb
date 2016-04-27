<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaAnalytiques
 *
 * @ORM\Table(name="compta_analytiques")
 * @ORM\Entity
 */
class ComptaAnalytiques
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDanalytique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idanalytique;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="abrege", type="string", length=200, nullable=true)
     */
    private $abrege;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;


}

