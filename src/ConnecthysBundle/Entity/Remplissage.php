<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remplissage
 *
 * @ORM\Table(name="remplissage", indexes={@ORM\Index(name="index_remplissage_IDactivite", columns={"IDactivite"}), @ORM\Index(name="index_remplissage_date", columns={"date"}), @ORM\Index(name="IDunite_remplissage", columns={"IDunite_remplissage"}), @ORM\Index(name="IDgroupe", columns={"IDgroupe"}), @ORM\Index(name="IDunite_remplissage_2", columns={"IDunite_remplissage"})})
 * @ORM\Entity
 */
class Remplissage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDremplissage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idremplissage;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite_remplissage", type="integer", nullable=true)
     */
    private $iduniteRemplissage;

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
     * @var integer
     *
     * @ORM\Column(name="places", type="integer", nullable=true)
     */
    private $places;



    /**
     * Get idremplissage
     *
     * @return integer
     */
    public function getIdremplissage()
    {
        return $this->idremplissage;
    }

    /**
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return Remplissage
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
     * Set iduniteRemplissage
     *
     * @param integer $iduniteRemplissage
     *
     * @return Remplissage
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
     * Set idgroupe
     *
     * @param integer $idgroupe
     *
     * @return Remplissage
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
     * @return Remplissage
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
     * Set places
     *
     * @param integer $places
     *
     * @return Remplissage
     */
    public function setPlaces($places)
    {
        $this->places = $places;

        return $this;
    }

    /**
     * Get places
     *
     * @return integer
     */
    public function getPlaces()
    {
        return $this->places;
    }
}
