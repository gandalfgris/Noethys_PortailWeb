<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatNominSelections
 *
 * @ORM\Table(name="etat_nomin_selections")
 * @ORM\Entity
 */
class EtatNominSelections
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDselection", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idselection;

    /**
     * @var string
     *
     * @ORM\Column(name="IDprofil", type="text", length=65535, nullable=true)
     */
    private $idprofil;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="text", length=65535, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;



    /**
     * Get idselection
     *
     * @return integer
     */
    public function getIdselection()
    {
        return $this->idselection;
    }

    /**
     * Set idprofil
     *
     * @param string $idprofil
     *
     * @return EtatNominSelections
     */
    public function setIdprofil($idprofil)
    {
        $this->idprofil = $idprofil;

        return $this;
    }

    /**
     * Get idprofil
     *
     * @return string
     */
    public function getIdprofil()
    {
        return $this->idprofil;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return EtatNominSelections
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return EtatNominSelections
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer
     */
    public function getOrdre()
    {
        return $this->ordre;
    }
}
