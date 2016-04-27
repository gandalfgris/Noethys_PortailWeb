<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponsablesActivite
 *
 * @ORM\Table(name="responsables_activite")
 * @ORM\Entity
 */
class ResponsablesActivite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDresponsable", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idresponsable;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=10, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=200, nullable=true)
     */
    private $fonction;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;


}

