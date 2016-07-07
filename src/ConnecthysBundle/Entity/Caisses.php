<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caisses
 *
 * @ORM\Table(name="caisses", indexes={@ORM\Index(name="IDregime", columns={"IDregime"})})
 * @ORM\Entity
 */
class Caisses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcaisse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcaisse;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var \Regimes
     *
     * @ORM\ManyToOne(targetEntity="Regimes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDregime", referencedColumnName="IDregime")
     * })
     */
    private $idregime;



    /**
     * Get idcaisse
     *
     * @return integer
     */
    public function getIdcaisse()
    {
        return $this->idcaisse;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Caisses
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
     * Set idregime
     *
     * @param \ConnecthysBundle\Entity\Regimes $idregime
     *
     * @return Caisses
     */
    public function setIdregime(\ConnecthysBundle\Entity\Regimes $idregime = null)
    {
        $this->idregime = $idregime;

        return $this;
    }

    /**
     * Get idregime
     *
     * @return \ConnecthysBundle\Entity\Regimes
     */
    public function getIdregime()
    {
        return $this->idregime;
    }
}
