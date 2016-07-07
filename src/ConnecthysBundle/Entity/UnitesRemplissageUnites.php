<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitesRemplissageUnites
 *
 * @ORM\Table(name="unites_remplissage_unites", indexes={@ORM\Index(name="IDunite", columns={"IDunite"}), @ORM\Index(name="IDunite_remplissage", columns={"IDunite_remplissage"})})
 * @ORM\Entity
 */
class UnitesRemplissageUnites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_remplissage_unite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniteRemplissageUnite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_remplissage", type="integer", nullable=true)
     */
    private $iduniteRemplissage;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=true)
     */
    private $idunite;



    /**
     * Get iduniteRemplissageUnite
     *
     * @return integer
     */
    public function getIduniteRemplissageUnite()
    {
        return $this->iduniteRemplissageUnite;
    }

    /**
     * Set iduniteRemplissage
     *
     * @param integer $iduniteRemplissage
     *
     * @return UnitesRemplissageUnites
     */
    public function setIduniteRemplissage($iduniteRemplissage)
    {
        $this->iduniteRemplissage = $iduniteRemplissage;

        return $this;
    }

    /**
     * Get iduniteRemplissage
     *
     * @return integer
     */
    public function getIduniteRemplissage()
    {
        return $this->iduniteRemplissage;
    }

    /**
     * Set idunite
     *
     * @param integer $idunite
     *
     * @return UnitesRemplissageUnites
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
}
