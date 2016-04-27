<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransportsLignes
 *
 * @ORM\Table(name="transports_lignes")
 * @ORM\Entity
 */
class TransportsLignes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDligne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idligne;

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


}

