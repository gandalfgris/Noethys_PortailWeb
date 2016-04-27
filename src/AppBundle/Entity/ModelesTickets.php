<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelesTickets
 *
 * @ORM\Table(name="modeles_tickets")
 * @ORM\Entity
 */
class ModelesTickets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmodele", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodele;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="text", length=65535, nullable=true)
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
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="lignes", type="text", length=65535, nullable=true)
     */
    private $lignes;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer", nullable=true)
     */
    private $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="interligne", type="integer", nullable=true)
     */
    private $interligne;

    /**
     * @var string
     *
     * @ORM\Column(name="imprimante", type="text", length=65535, nullable=true)
     */
    private $imprimante;


}

