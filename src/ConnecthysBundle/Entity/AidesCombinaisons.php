<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AidesCombinaisons
 *
 * @ORM\Table(name="aides_combinaisons", indexes={@ORM\Index(name="IDaide", columns={"IDaide"}), @ORM\Index(name="IDaide_montant", columns={"IDaide_montant"})})
 * @ORM\Entity
 */
class AidesCombinaisons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide_combi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaideCombi;

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
     * @var \AidesMontants
     *
     * @ORM\ManyToOne(targetEntity="AidesMontants")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDaide_montant", referencedColumnName="IDaide_montant")
     * })
     */
    private $idaideMontant;



    /**
     * Get idaideCombi
     *
     * @return integer
     */
    public function getIdaideCombi()
    {
        return $this->idaideCombi;
    }

    /**
     * Set idaide
     *
     * @param \ConnecthysBundle\Entity\Aides $idaide
     *
     * @return AidesCombinaisons
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

    /**
     * Set idaideMontant
     *
     * @param \ConnecthysBundle\Entity\AidesMontants $idaideMontant
     *
     * @return AidesCombinaisons
     */
    public function setIdaideMontant(\ConnecthysBundle\Entity\AidesMontants $idaideMontant = null)
    {
        $this->idaideMontant = $idaideMontant;

        return $this;
    }

    /**
     * Get idaideMontant
     *
     * @return \ConnecthysBundle\Entity\AidesMontants
     */
    public function getIdaideMontant()
    {
        return $this->idaideMontant;
    }
}
