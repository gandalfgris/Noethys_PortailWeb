<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LotsPrelevements
 *
 * @ORM\Table(name="lots_prelevements")
 * @ORM\Entity
 */
class LotsPrelevements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDlot", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlot;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillage", type="integer", nullable=true)
     */
    private $verrouillage;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte", type="integer", nullable=true)
     */
    private $idcompte;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmode", type="integer", nullable=true)
     */
    private $idmode;

    /**
     * @var integer
     *
     * @ORM\Column(name="reglement_auto", type="integer", nullable=true)
     */
    private $reglementAuto;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;



    /**
     * Get idlot
     *
     * @return integer
     */
    public function getIdlot()
    {
        return $this->idlot;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return LotsPrelevements
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
     * Set date
     *
     * @param string $date
     *
     * @return LotsPrelevements
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
     * Set verrouillage
     *
     * @param integer $verrouillage
     *
     * @return LotsPrelevements
     */
    public function setVerrouillage($verrouillage)
    {
        $this->verrouillage = $verrouillage;

        return $this;
    }

    /**
     * Get verrouillage
     *
     * @return integer
     */
    public function getVerrouillage()
    {
        return $this->verrouillage;
    }

    /**
     * Set idcompte
     *
     * @param integer $idcompte
     *
     * @return LotsPrelevements
     */
    public function setIdcompte($idcompte)
    {
        $this->idcompte = $idcompte;

        return $this;
    }

    /**
     * Get idcompte
     *
     * @return integer
     */
    public function getIdcompte()
    {
        return $this->idcompte;
    }

    /**
     * Set idmode
     *
     * @param integer $idmode
     *
     * @return LotsPrelevements
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
     * Set reglementAuto
     *
     * @param integer $reglementAuto
     *
     * @return LotsPrelevements
     */
    public function setReglementAuto($reglementAuto)
    {
        $this->reglementAuto = $reglementAuto;

        return $this;
    }

    /**
     * Get reglementAuto
     *
     * @return integer
     */
    public function getReglementAuto()
    {
        return $this->reglementAuto;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return LotsPrelevements
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
     * Set type
     *
     * @param string $type
     *
     * @return LotsPrelevements
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
}
