<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classes
 *
 * @ORM\Table(name="classes")
 * @ORM\Entity
 */
class Classes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDclasse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclasse;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDecole", type="integer", nullable=true)
     */
    private $idecole;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

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
     * @var string
     *
     * @ORM\Column(name="niveaux", type="text", length=65535, nullable=true)
     */
    private $niveaux;


}

