<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RenseignementsActivites
 *
 * @ORM\Table(name="renseignements_activites")
 * @ORM\Entity
 */
class RenseignementsActivites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDrenseignement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrenseignement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_renseignement", type="integer", nullable=true)
     */
    private $idtypeRenseignement;


}

