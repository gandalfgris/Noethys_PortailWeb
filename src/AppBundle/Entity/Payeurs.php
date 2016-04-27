<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payeurs
 *
 * @ORM\Table(name="payeurs")
 * @ORM\Entity
 */
class Payeurs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDpayeur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpayeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=true)
     */
    private $idcomptePayeur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;


}

