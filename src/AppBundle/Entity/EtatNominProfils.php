<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatNominProfils
 *
 * @ORM\Table(name="etat_nomin_profils")
 * @ORM\Entity
 */
class EtatNominProfils
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDprofil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprofil;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="text", length=65535, nullable=true)
     */
    private $label;


}

