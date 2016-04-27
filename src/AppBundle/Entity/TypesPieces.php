<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesPieces
 *
 * @ORM\Table(name="types_pieces")
 * @ORM\Entity
 */
class TypesPieces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_piece", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypePiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="public", type="string", length=12, nullable=true)
     */
    private $public;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_validite", type="string", length=50, nullable=true)
     */
    private $dureeValidite;

    /**
     * @var integer
     *
     * @ORM\Column(name="valide_rattachement", type="integer", nullable=true)
     */
    private $valideRattachement;


}

