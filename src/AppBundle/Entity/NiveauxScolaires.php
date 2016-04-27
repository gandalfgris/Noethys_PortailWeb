<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NiveauxScolaires
 *
 * @ORM\Table(name="niveaux_scolaires")
 * @ORM\Entity
 */
class NiveauxScolaires
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDniveau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idniveau;

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

    /**
     * @var string
     *
     * @ORM\Column(name="abrege", type="string", length=200, nullable=true)
     */
    private $abrege;


}

