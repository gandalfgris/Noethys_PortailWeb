<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pieces
 *
 * @ORM\Table(name="pieces", indexes={@ORM\Index(name="index_pieces_IDindividu", columns={"IDindividu"}), @ORM\Index(name="index_pieces_IDfamille", columns={"IDfamille"})})
 * @ORM\Entity
 */
class Pieces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDpiece", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_piece", type="integer", nullable=true)
     */
    private $idtypePiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=10, nullable=true)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string", length=10, nullable=true)
     */
    private $dateFin;


}

