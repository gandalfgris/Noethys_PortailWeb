<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CombiTarifs
 *
 * @ORM\Table(name="combi_tarifs", indexes={@ORM\Index(name="IDtarif", columns={"IDtarif"}), @ORM\Index(name="IDgroupe", columns={"IDgroupe"})})
 * @ORM\Entity
 */
class CombiTarifs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcombi_tarif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcombiTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtarif", type="integer", nullable=true)
     */
    private $idtarif;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
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
     * @ORM\Column(name="quantite_max", type="integer", nullable=true)
     */
    private $quantiteMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDgroupe", type="integer", nullable=true)
     */
    private $idgroupe;



    /**
     * Get idcombiTarif
     *
     * @return integer
     */
    public function getIdcombiTarif()
    {
        return $this->idcombiTarif;
    }

    /**
     * Set idtarif
     *
     * @param integer $idtarif
     *
     * @return CombiTarifs
     */
    public function setIdtarif($idtarif)
    {
        $this->idtarif = $idtarif;

        return $this;
    }

    /**
     * Get idtarif
     *
     * @return integer
     */
    public function getIdtarif()
    {
        return $this->idtarif;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return CombiTarifs
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
     * @return CombiTarifs
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
     * Set quantiteMax
     *
     * @param integer $quantiteMax
     *
     * @return CombiTarifs
     */
    public function setQuantiteMax($quantiteMax)
    {
        $this->quantiteMax = $quantiteMax;

        return $this;
    }

    /**
     * Get quantiteMax
     *
     * @return integer
     */
    public function getQuantiteMax()
    {
        return $this->quantiteMax;
    }

    /**
     * Set idgroupe
     *
     * @param integer $idgroupe
     *
     * @return CombiTarifs
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
