<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AidesCombinaisons
 *
 * @ORM\Table(name="aides_combinaisons")
 * @ORM\Entity
 */
class AidesCombinaisons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide_combi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaideCombi;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide", type="integer", nullable=true)
     */
    private $idaide;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide_montant", type="integer", nullable=true)
     */
    private $idaideMontant;


}

