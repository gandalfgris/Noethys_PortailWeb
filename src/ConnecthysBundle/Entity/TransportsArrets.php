<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransportsArrets
 *
 * @ORM\Table(name="transports_arrets", indexes={@ORM\Index(name="IDligne", columns={"IDligne"})})
 * @ORM\Entity
 */
class TransportsArrets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDarret", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarret;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDligne", type="integer", nullable=true)
     */
    private $idligne;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;



    /**
     * Get idarret
     *
     * @return integer
     */
    public function getIdarret()
    {
        return $this->idarret;
    }

    /**
     * Set idligne
     *
     * @param integer $idligne
     *
     * @return TransportsArrets
     */
    public function setIdligne($idligne)
    {
        $this->idligne = $idligne;

        return $this;
    }

    /**
     * Get idligne
     *
     * @return integer
     */
    public function getIdligne()
    {
        return $this->idligne;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return TransportsArrets
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

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return TransportsArrets
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
}
