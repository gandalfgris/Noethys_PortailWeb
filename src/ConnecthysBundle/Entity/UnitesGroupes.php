<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitesGroupes
 *
 * @ORM\Table(name="unites_groupes", indexes={@ORM\Index(name="IDunite", columns={"IDunite"}), @ORM\Index(name="IDgroupe", columns={"IDgroupe"})})
 * @ORM\Entity
 */
class UnitesGroupes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_groupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniteGroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=true)
     */
    private $idunite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDgroupe", type="integer", nullable=true)
     */
    private $idgroupe;



    /**
     * Get iduniteGroupe
     *
     * @return integer
     */
    public function getIduniteGroupe()
    {
        return $this->iduniteGroupe;
    }

    /**
     * Set idunite
     *
     * @param integer $idunite
     *
     * @return UnitesGroupes
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
     * Set idgroupe
     *
     * @param integer $idgroupe
     *
     * @return UnitesGroupes
     */
    public function setIdgroupe($idgroupe)
    {
        $this->idgroupe = $idgroupe;

        return $this;
    }

    /**
     * Get idgroupe
     *
     * @return integer
     */
    public function getIdgroupe()
    {
        return $this->idgroupe;
    }
}
