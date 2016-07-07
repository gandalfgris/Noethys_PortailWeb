<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liens
 *
 * @ORM\Table(name="liens", indexes={@ORM\Index(name="index_liens_IDfamille", columns={"IDfamille"})})
 * @ORM\Entity
 */
class Liens
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDlien", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlien;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu_sujet", type="integer", nullable=true)
     */
    private $idindividuSujet;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_lien", type="integer", nullable=true)
     */
    private $idtypeLien;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu_objet", type="integer", nullable=true)
     */
    private $idindividuObjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="responsable", type="integer", nullable=true)
     */
    private $responsable;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDautorisation", type="integer", nullable=true)
     */
    private $idautorisation;



    /**
     * Get idlien
     *
     * @return integer
     */
    public function getIdlien()
    {
        return $this->idlien;
    }

    /**
     * Set idfamille
     *
     * @param integer $idfamille
     *
     * @return Liens
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
     * Set idindividuSujet
     *
     * @param integer $idindividuSujet
     *
     * @return Liens
     */
    public function setIdindividuSujet($idindividuSujet)
    {
        $this->idindividuSujet = $idindividuSujet;

        return $this;
    }

    /**
     * Get idindividuSujet
     *
     * @return integer
     */
    public function getIdindividuSujet()
    {
        return $this->idindividuSujet;
    }

    /**
     * Set idtypeLien
     *
     * @param integer $idtypeLien
     *
     * @return Liens
     */
    public function setIdtypeLien($idtypeLien)
    {
        $this->idtypeLien = $idtypeLien;

        return $this;
    }

    /**
     * Get idtypeLien
     *
     * @return integer
     */
    public function getIdtypeLien()
    {
        return $this->idtypeLien;
    }

    /**
     * Set idindividuObjet
     *
     * @param integer $idindividuObjet
     *
     * @return Liens
     */
    public function setIdindividuObjet($idindividuObjet)
    {
        $this->idindividuObjet = $idindividuObjet;

        return $this;
    }

    /**
     * Get idindividuObjet
     *
     * @return integer
     */
    public function getIdindividuObjet()
    {
        return $this->idindividuObjet;
    }

    /**
     * Set responsable
     *
     * @param integer $responsable
     *
     * @return Liens
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return integer
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set idautorisation
     *
     * @param integer $idautorisation
     *
     * @return Liens
     */
    public function setIdautorisation($idautorisation)
    {
        $this->idautorisation = $idautorisation;

        return $this;
    }

    /**
     * Get idautorisation
     *
     * @return integer
     */
    public function getIdautorisation()
    {
        return $this->idautorisation;
    }
}
