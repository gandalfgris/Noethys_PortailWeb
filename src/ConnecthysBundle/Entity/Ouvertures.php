<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ouvertures
 *
 * @ORM\Table(name="ouvertures", indexes={@ORM\Index(name="index_ouvertures_date", columns={"date"}), @ORM\Index(name="index_ouvertures_IDactivite", columns={"IDactivite"}), @ORM\Index(name="IDunite", columns={"IDunite"}), @ORM\Index(name="IDgroupe", columns={"IDgroupe"})})
 * @ORM\Entity
 */
class Ouvertures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDouverture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idouverture;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

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
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;



    /**
     * Get idouverture
     *
     * @return integer
     */
    public function getIdouverture()
    {
        return $this->idouverture;
    }

    /**
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return Ouvertures
     */
    public function setIdactivite($idactivite)
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    /**
     * Get idactivite
     *
     * @return integer
     */
    public function getIdactivite()
    {
        return $this->idactivite;
    }

    /**
     * Set idunite
     *
     * @param integer $idunite
     *
     * @return Ouvertures
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
     * @return Ouvertures
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

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Ouvertures
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
}
