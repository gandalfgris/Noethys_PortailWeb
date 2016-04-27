<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatNominChamps
 *
 * @ORM\Table(name="etat_nomin_champs")
 * @ORM\Entity
 */
class EtatNominChamps
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDchamp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idchamp;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="text", length=65535, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="text", length=65535, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="formule", type="text", length=65535, nullable=true)
     */
    private $formule;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text", length=65535, nullable=true)
     */
    private $titre;


}

