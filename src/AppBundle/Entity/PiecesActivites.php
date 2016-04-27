<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PiecesActivites
 *
 * @ORM\Table(name="pieces_activites")
 * @ORM\Entity
 */
class PiecesActivites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDpiece_activite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpieceActivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_piece", type="integer", nullable=true)
     */
    private $idtypePiece;


}

