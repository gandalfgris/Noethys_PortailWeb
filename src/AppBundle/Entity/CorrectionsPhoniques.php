<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrectionsPhoniques
 *
 * @ORM\Table(name="corrections_phoniques")
 * @ORM\Entity
 */
class CorrectionsPhoniques
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcorrection", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcorrection;

    /**
     * @var string
     *
     * @ORM\Column(name="mot", type="text", length=65535, nullable=true)
     */
    private $mot;

    /**
     * @var string
     *
     * @ORM\Column(name="correction", type="text", length=65535, nullable=true)
     */
    private $correction;


}

