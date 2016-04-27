<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitesGroupes
 *
 * @ORM\Table(name="unites_groupes")
 * @ORM\Entity
 */
class UnitesGroupes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_groupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniteGroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=true)
     */
    private $idunite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDgroupe", type="integer", nullable=true)
     */
    private $idgroupe;


}

