<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CombiTarifsUnites
 *
 * @ORM\Table(name="combi_tarifs_unites", indexes={@ORM\Index(name="IDcombi_tarif", columns={"IDcombi_tarif"}), @ORM\Index(name="IDtarif", columns={"IDtarif"}), @ORM\Index(name="IDunite", columns={"IDunite"})})
 * @ORM\Entity
 */
class CombiTarifsUnites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcombi_tarif_unite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcombiTarifUnite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcombi_tarif", type="integer", nullable=true)
     */
    private $idcombiTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtarif", type="integer", nullable=true)
     */
    private $idtarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=true)
     */
    private $idunite;



    /**
     * Get idcombiTarifUnite
     *
     * @return integer
     */
    public function getIdcombiTarifUnite()
    {
        return $this->idcombiTarifUnite;
    }

    /**
     * Set idcombiTarif
     *
     * @param integer $idcombiTarif
     *
     * @return CombiTarifsUnites
     */
    public function setIdcombiTarif($idcombiTarif)
    {
        $this->idcombiTarif = $idcombiTarif;

        return $this;
    }

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
     * @return CombiTarifsUnites
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
     * Set idunite
     *
     * @param integer $idunite
     *
     * @return CombiTarifsUnites
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
