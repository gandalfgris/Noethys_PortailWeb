<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scolarite
 *
 * @ORM\Table(name="scolarite")
 * @ORM\Entity
 */
class Scolarite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDscolarite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idscolarite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

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

    /**
     * @var integer
     *
     * @ORM\Column(name="IDecole", type="integer", nullable=true)
     */
    private $idecole;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDclasse", type="integer", nullable=true)
     */
    private $idclasse;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDniveau", type="integer", nullable=true)
     */
    private $idniveau;


}

