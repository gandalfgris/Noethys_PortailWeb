<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pieces
 *
 * @ORM\Table(name="pieces", indexes={@ORM\Index(name="index_pieces_IDindividu", columns={"IDindividu"}), @ORM\Index(name="index_pieces_IDfamille", columns={"IDfamille"}), @ORM\Index(name="IDtype_piece", columns={"IDtype_piece"})})
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



    /**
     * Get idpiece
     *
     * @return integer
     */
    public function getIdpiece()
    {
        return $this->idpiece;
    }

    /**
     * Set idtypePiece
     *
     * @param integer $idtypePiece
     *
     * @return Pieces
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

    /**
     * Set idindividu
     *
     * @param integer $idindividu
     *
     * @return Pieces
     */
    public function setIdindividu($idindividu)
    {
        $this->idindividu = $idindividu;

        return $this;
    }

    /**
     * Get idindividu
     *
     * @return integer
     */
    public function getIdindividu()
    {
        return $this->idindividu;
    }

    /**
     * Set idfamille
     *
     * @param integer $idfamille
     *
     * @return Pieces
     */
    public function setIdfamille($idfamille)
    {
        $this->idfamille = $idfamille;

        return $this;
    }

    /**
     * Get idfamille
     *
     * @return integer
     */
    public function getIdfamille()
    {
        return $this->idfamille;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Pieces
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     *
     * @return Pieces
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
}
