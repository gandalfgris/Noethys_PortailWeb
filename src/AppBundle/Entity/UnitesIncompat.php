<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitesIncompat
 *
 * @ORM\Table(name="unites_incompat")
 * @ORM\Entity
 */
class UnitesIncompat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_incompat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniteIncompat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=true)
     */
    private $idunite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_incompatible", type="integer", nullable=true)
     */
    private $iduniteIncompatible;


}

