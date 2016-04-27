<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitesRemplissageUnites
 *
 * @ORM\Table(name="unites_remplissage_unites")
 * @ORM\Entity
 */
class UnitesRemplissageUnites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_remplissage_unite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniteRemplissageUnite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_remplissage", type="integer", nullable=true)
     */
    private $iduniteRemplissage;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=true)
     */
    private $idunite;


}

