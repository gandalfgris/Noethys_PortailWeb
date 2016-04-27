<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agrements
 *
 * @ORM\Table(name="agrements")
 * @ORM\Entity
 */
class Agrements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDagrement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idagrement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="agrement", type="string", length=200, nullable=true)
     */
    private $agrement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=10, nullable=true)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string", length=10, nullable=true)
     */
    private $dateFin;


}

