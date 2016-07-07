<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitesIncompat
 *
 * @ORM\Table(name="unites_incompat", indexes={@ORM\Index(name="IDunite", columns={"IDunite"}), @ORM\Index(name="IDunite_incompatible", columns={"IDunite_incompatible"})})
 * @ORM\Entity
 */
class UnitesIncompat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_incompat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniteIncompat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=true)
     */
    private $idunite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_incompatible", type="integer", nullable=true)
     */
    private $iduniteIncompatible;



    /**
     * Get iduniteIncompat
     *
     * @return integer
     */
    public function getIduniteIncompat()
    {
        return $this->iduniteIncompat;
    }

    /**
     * Set idunite
     *
     * @param integer $idunite
     *
     * @return UnitesIncompat
     */
    public function setIdunite($idunite)
    {
        $this->idunite = $idunite;

        return $this;
    }

    /**
     * Get idunite
     *
     * @return integer
     */
    public function getIdunite()
    {
        return $this->idunite;
    }

    /**
     * Set iduniteIncompatible
     *
     * @param integer $iduniteIncompatible
     *
     * @return UnitesIncompat
     */
    public function setIduniteIncompatible($iduniteIncompatible)
    {
        $this->iduniteIncompatible = $iduniteIncompatible;

        return $this;
    }

    /**
     * Get iduniteIncompatible
     *
     * @return integer
     */
    public function getIduniteIncompatible()
    {
        return $this->iduniteIncompatible;
    }
}
