<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaVirements
 *
 * @ORM\Table(name="compta_virements")
 * @ORM\Entity
 */
class ComptaVirements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDvirement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvirement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDoperation_debit", type="integer", nullable=true)
     */
    private $idoperationDebit;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDoperation_credit", type="integer", nullable=true)
     */
    private $idoperationCredit;


}

