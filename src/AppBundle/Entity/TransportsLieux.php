<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransportsLieux
 *
 * @ORM\Table(name="transports_lieux")
 * @ORM\Entity
 */
class TransportsLieux
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDlieu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlieu;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=200, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=200, nullable=true)
     */
    private $ville;


}

