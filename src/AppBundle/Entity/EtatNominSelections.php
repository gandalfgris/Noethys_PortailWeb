<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatNominSelections
 *
 * @ORM\Table(name="etat_nomin_selections")
 * @ORM\Entity
 */
class EtatNominSelections
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDselection", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idselection;

    /**
     * @var string
     *
     * @ORM\Column(name="IDprofil", type="text", length=65535, nullable=true)
     */
    private $idprofil;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="text", length=65535, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;


}

