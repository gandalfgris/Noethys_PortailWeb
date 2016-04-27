<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentsModeles
 *
 * @ORM\Table(name="documents_modeles")
 * @ORM\Entity
 */
class DocumentsModeles
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
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=200, nullable=true)
     */
    private $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="supprimable", type="integer", nullable=true)
     */
    private $supprimable;

    /**
     * @var integer
     *
     * @ORM\Column(name="largeur", type="integer", nullable=true)
     */
    private $largeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="hauteur", type="integer", nullable=true)
     */
    private $hauteur;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfond", type="integer", nullable=true)
     */
    private $idfond;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;


}

