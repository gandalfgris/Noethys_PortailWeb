<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AidesBeneficiaires
 *
 * @ORM\Table(name="aides_beneficiaires")
 * @ORM\Entity
 */
class AidesBeneficiaires
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide_beneficiaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaideBeneficiaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide", type="integer", nullable=true)
     */
    private $idaide;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;


}

