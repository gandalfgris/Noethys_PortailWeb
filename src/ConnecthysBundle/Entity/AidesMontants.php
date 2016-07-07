<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AidesMontants
 *
 * @ORM\Table(name="aides_montants", indexes={@ORM\Index(name="IDaide", columns={"IDaide"}), @ORM\Index(name="IDaide_2", columns={"IDaide"})})
 * @ORM\Entity
 */
class AidesMontants
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide_montant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaideMontant;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var \Aides
     *
     * @ORM\ManyToOne(targetEntity="Aides")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDaide", referencedColumnName="IDaide")
     * })
     */
    private $idaide;



    /**
     * Get idaideMontant
     *
     * @return integer
     */
    public function getIdaideMontant()
    {
        return $this->idaideMontant;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return AidesMontants
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set idaide
     *
     * @param \ConnecthysBundle\Entity\Aides $idaide
     *
     * @return AidesMontants
     */
    public function setIdaide(\ConnecthysBundle\Entity\Aides $idaide = null)
    {
        $this->idaide = $idaide;

        return $this;
    }

    /**
     * Get idaide
     *
     * @return \ConnecthysBundle\Entity\Aides
     */
    public function getIdaide()
    {
        return $this->idaide;
    }
}
