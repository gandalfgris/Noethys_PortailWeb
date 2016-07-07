<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaOperations
 *
 * @ORM\Table(name="compta_operations", indexes={@ORM\Index(name="IDtiers", columns={"IDtiers"}), @ORM\Index(name="IDmode", columns={"IDmode"}), @ORM\Index(name="IDcompte_bancaire", columns={"IDcompte_bancaire"}), @ORM\Index(name="IDreleve", columns={"IDreleve"}), @ORM\Index(name="IDvirement", columns={"IDvirement"})})
 * @ORM\Entity
 */
class ComptaOperations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDoperation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoperation;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=200, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="text", length=65535, nullable=true)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtiers", type="integer", nullable=true)
     */
    private $idtiers;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmode", type="integer", nullable=true)
     */
    private $idmode;

    /**
     * @var string
     *
     * @ORM\Column(name="num_piece", type="string", length=200, nullable=true)
     */
    private $numPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_piece", type="string", length=200, nullable=true)
     */
    private $refPiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_bancaire", type="integer", nullable=true)
     */
    private $idcompteBancaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDreleve", type="integer", nullable=true)
     */
    private $idreleve;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDvirement", type="integer", nullable=true)
     */
    private $idvirement;



    /**
     * Get idoperation
     *
     * @return integer
     */
    public function getIdoperation()
    {
        return $this->idoperation;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ComptaOperations
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
     * @return ComptaOperations
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return ComptaOperations
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set idtiers
     *
     * @param integer $idtiers
     *
     * @return ComptaOperations
     */
    public function setIdtiers($idtiers)
    {
        $this->idtiers = $idtiers;

        return $this;
    }

    /**
     * Get idtiers
     *
     * @return integer
     */
    public function getIdtiers()
    {
        return $this->idtiers;
    }

    /**
     * Set idmode
     *
     * @param integer $idmode
     *
     * @return ComptaOperations
     */
    public function setIdmode($idmode)
    {
        $this->idmode = $idmode;

        return $this;
    }

    /**
     * Get idmode
     *
     * @return integer
     */
    public function getIdmode()
    {
        return $this->idmode;
    }

    /**
     * Set numPiece
     *
     * @param string $numPiece
     *
     * @return ComptaOperations
     */
    public function setNumPiece($numPiece)
    {
        $this->numPiece = $numPiece;

        return $this;
    }

    /**
     * Get numPiece
     *
     * @return string
     */
    public function getNumPiece()
    {
        return $this->numPiece;
    }

    /**
     * Set refPiece
     *
     * @param string $refPiece
     *
     * @return ComptaOperations
     */
    public function setRefPiece($refPiece)
    {
        $this->refPiece = $refPiece;

        return $this;
    }

    /**
     * Get refPiece
     *
     * @return string
     */
    public function getRefPiece()
    {
        return $this->refPiece;
    }

    /**
     * Set idcompteBancaire
     *
     * @param integer $idcompteBancaire
     *
     * @return ComptaOperations
     */
    public function setIdcompteBancaire($idcompteBancaire)
    {
        $this->idcompteBancaire = $idcompteBancaire;

        return $this;
    }

    /**
     * Get idcompteBancaire
     *
     * @return integer
     */
    public function getIdcompteBancaire()
    {
        return $this->idcompteBancaire;
    }

    /**
     * Set idreleve
     *
     * @param integer $idreleve
     *
     * @return ComptaOperations
     */
    public function setIdreleve($idreleve)
    {
        $this->idreleve = $idreleve;

        return $this;
    }

    /**
     * Get idreleve
     *
     * @return integer
     */
    public function getIdreleve()
    {
        return $this->idreleve;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return ComptaOperations
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return ComptaOperations
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set idvirement
     *
     * @param integer $idvirement
     *
     * @return ComptaOperations
     */
    public function setIdvirement($idvirement)
    {
        $this->idvirement = $idvirement;

        return $this;
    }

    /**
     * Get idvirement
     *
     * @return integer
     */
    public function getIdvirement()
    {
        return $this->idvirement;
    }
}
