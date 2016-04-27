<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelesPlannings
 *
 * @ORM\Table(name="modeles_plannings")
 * @ORM\Entity
 */
class ModelesPlannings
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmodele", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodele;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="donnees", type="text", length=65535, nullable=true)
     */
    private $donnees;


}

