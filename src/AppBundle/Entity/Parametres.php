<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametres
 *
 * @ORM\Table(name="parametres")
 * @ORM\Entity
 */
class Parametres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDparametre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparametre;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=200, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="parametre", type="text", length=16777215, nullable=true)
     */
    private $parametre;


}

