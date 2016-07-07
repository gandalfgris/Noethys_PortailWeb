<?php

namespace ConnecthysBundle\Entity;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return TypesPieces
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set public
     *
     * @param string $public
     *
     * @return TypesPieces
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return string
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set dureeValidite
     *
     * @param string $dureeValidite
     *
     * @return TypesPieces
     */
    public function setDureeValidite($dureeValidite)
    {
        $this->dureeValidite = $dureeValidite;

        return $this;
    }

    /**
     * Get dureeValidite
     *
     * @return string
     */
    public function getDureeValidite()
    {
        return $this->dureeValidite;
    }

    /**
     * Set valideRattachement
     *
     * @param integer $valideRattachement
     *
     * @return TypesPieces
     */
    public function setValideRattachement($valideRattachement)
    {
        $this->valideRattachement = $valideRattachement;

        return $this;
    }

    /**
     * Get valideRattachement
     *
     * @return integer
     */
    public function getValideRattachement()
    {
        return $this->valideRattachement;
    }
}
