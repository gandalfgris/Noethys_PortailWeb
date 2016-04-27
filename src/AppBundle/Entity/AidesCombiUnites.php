<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AidesCombiUnites
 *
 * @ORM\Table(name="aides_combi_unites")
 * @ORM\Entity
 */
class AidesCombiUnites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide_combi_unite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaideCombiUnite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide", type="integer", nullable=true)
     */
    private $idaide;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide_combi", type="integer", nullable=true)
     */
    private $idaideCombi;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=true)
     */
    private $idunite;


}

