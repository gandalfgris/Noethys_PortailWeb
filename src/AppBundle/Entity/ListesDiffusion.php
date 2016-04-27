<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListesDiffusion
 *
 * @ORM\Table(name="listes_diffusion")
 * @ORM\Entity
 */
class ListesDiffusion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDliste", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idliste;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;


}

