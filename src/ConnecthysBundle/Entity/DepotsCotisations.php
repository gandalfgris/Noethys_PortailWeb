<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepotsCotisations
 *
 * @ORM\Table(name="depots_cotisations")
 * @ORM\Entity
 */
class DepotsCotisations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDdepot_cotisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddepotCotisation;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="verrouillage", type="integer", nullable=true)
     */
    private $verrouillage;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;



    /**
     * Get iddepotCotisation
     *
     * @return integer
     */
    public function getIddepotCotisation()
    {
        return $this->iddepotCotisation;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return DepotsCotisations
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
     * Set nom
     *
     * @param string $nom
     *
     * @return DepotsCotisations
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
     * Set verrouillage
     *
     * @param integer $verrouillage
     *
     * @return DepotsCotisations
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
     * Set observations
     *
     * @param string $observations
     *
     * @return DepotsCotisations
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
}
