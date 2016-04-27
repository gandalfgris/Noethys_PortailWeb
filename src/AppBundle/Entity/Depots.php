<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depots
 *
 * @ORM\Table(name="depots")
 * @ORM\Entity
 */
class Depots
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDdepot", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddepot;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillage", type="integer", nullable=true)
     */
    private $verrouillage;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte", type="integer", nullable=true)
     */
    private $idcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="code_compta", type="string", length=200, nullable=true)
     */
    private $codeCompta;


}

