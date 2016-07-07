<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PiecesActivites
 *
 * @ORM\Table(name="pieces_activites", indexes={@ORM\Index(name="IDactivite", columns={"IDactivite"}), @ORM\Index(name="IDtype_piece", columns={"IDtype_piece"})})
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



    /**
     * Get idpieceActivite
     *
     * @return integer
     */
    public function getIdpieceActivite()
    {
        return $this->idpieceActivite;
    }

    /**
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return PiecesActivites
     */
    public function setIdactivite($idactivite)
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    /**
     * Get idactivite
     *
     * @return integer
     */
    public function getIdactivite()
    {
        return $this->idactivite;
    }

    /**
     * Set idtypePiece
     *
     * @param integer $idtypePiece
     *
     * @return PiecesActivites
     */
    public function setIdtypePiece($idtypePiece)
    {
        $this->idtypePiece = $idtypePiece;

        return $this;
    }

    /**
     * Get idtypePiece
     *
     * @return integer
     */
    public function getIdtypePiece()
    {
        return $this->idtypePiece;
    }
}
