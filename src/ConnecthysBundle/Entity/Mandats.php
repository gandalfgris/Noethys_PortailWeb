<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mandats
 *
 * @ORM\Table(name="mandats")
 * @ORM\Entity
 */
class Mandats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmandat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmandat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var string
     *
     * @ORM\Column(name="rum", type="string", length=100, nullable=true)
     */
    private $rum;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDbanque", type="integer", nullable=true)
     */
    private $idbanque;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var string
     *
     * @ORM\Column(name="individu_nom", type="text", length=65535, nullable=true)
     */
    private $individuNom;

    /**
     * @var string
     *
     * @ORM\Column(name="individu_rue", type="text", length=65535, nullable=true)
     */
    private $individuRue;

    /**
     * @var string
     *
     * @ORM\Column(name="individu_cp", type="string", length=50, nullable=true)
     */
    private $individuCp;

    /**
     * @var string
     *
     * @ORM\Column(name="individu_ville", type="text", length=65535, nullable=true)
     */
    private $individuVille;

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="string", length=100, nullable=true)
     */
    private $iban;

    /**
     * @var string
     *
     * @ORM\Column(name="bic", type="string", length=100, nullable=true)
     */
    private $bic;

    /**
     * @var string
     *
     * @ORM\Column(name="memo", type="text", length=65535, nullable=true)
     */
    private $memo;

    /**
     * @var string
     *
     * @ORM\Column(name="sequence", type="string", length=100, nullable=true)
     */
    private $sequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="actif", type="integer", nullable=true)
     */
    private $actif;



    /**
     * Get idmandat
     *
     * @return integer
     */
    public function getIdmandat()
    {
        return $this->idmandat;
    }

    /**
     * Set idfamille
     *
     * @param integer $idfamille
     *
     * @return Mandats
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
     * Set rum
     *
     * @param string $rum
     *
     * @return Mandats
     */
    public function setRum($rum)
    {
        $this->rum = $rum;

        return $this;
    }

    /**
     * Get rum
     *
     * @return string
     */
    public function getRum()
    {
        return $this->rum;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Mandats
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Mandats
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idbanque
     *
     * @param integer $idbanque
     *
     * @return Mandats
     */
    public function setIdbanque($idbanque)
    {
        $this->idbanque = $idbanque;

        return $this;
    }

    /**
     * Get idbanque
     *
     * @return integer
     */
    public function getIdbanque()
    {
        return $this->idbanque;
    }

    /**
     * Set idindividu
     *
     * @param integer $idindividu
     *
     * @return Mandats
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
     * Set individuNom
     *
     * @param string $individuNom
     *
     * @return Mandats
     */
    public function setIndividuNom($individuNom)
    {
        $this->individuNom = $individuNom;

        return $this;
    }

    /**
     * Get individuNom
     *
     * @return string
     */
    public function getIndividuNom()
    {
        return $this->individuNom;
    }

    /**
     * Set individuRue
     *
     * @param string $individuRue
     *
     * @return Mandats
     */
    public function setIndividuRue($individuRue)
    {
        $this->individuRue = $individuRue;

        return $this;
    }

    /**
     * Get individuRue
     *
     * @return string
     */
    public function getIndividuRue()
    {
        return $this->individuRue;
    }

    /**
     * Set individuCp
     *
     * @param string $individuCp
     *
     * @return Mandats
     */
    public function setIndividuCp($individuCp)
    {
        $this->individuCp = $individuCp;

        return $this;
    }

    /**
     * Get individuCp
     *
     * @return string
     */
    public function getIndividuCp()
    {
        return $this->individuCp;
    }

    /**
     * Set individuVille
     *
     * @param string $individuVille
     *
     * @return Mandats
     */
    public function setIndividuVille($individuVille)
    {
        $this->individuVille = $individuVille;

        return $this;
    }

    /**
     * Get individuVille
     *
     * @return string
     */
    public function getIndividuVille()
    {
        return $this->individuVille;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return Mandats
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set bic
     *
     * @param string $bic
     *
     * @return Mandats
     */
    public function setBic($bic)
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * Get bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Set memo
     *
     * @param string $memo
     *
     * @return Mandats
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Set sequence
     *
     * @param string $sequence
     *
     * @return Mandats
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set actif
     *
     * @param integer $actif
     *
     * @return Mandats
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return integer
     */
    public function getActif()
    {
        return $this->actif;
    }
}
