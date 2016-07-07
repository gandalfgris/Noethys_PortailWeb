<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AidesCombiUnites
 *
 * @ORM\Table(name="aides_combi_unites", indexes={@ORM\Index(name="IDaide", columns={"IDaide"}), @ORM\Index(name="IDaide_combi", columns={"IDaide_combi"}), @ORM\Index(name="IDunite", columns={"IDunite"})})
 * @ORM\Entity
 */
class AidesCombiUnites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide_combi_unite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaideCombiUnite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDunite", type="integer", nullable=true)
     */
    private $idunite;

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
     * @var \AidesCombinaisons
     *
     * @ORM\ManyToOne(targetEntity="AidesCombinaisons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDaide_combi", referencedColumnName="IDaide_combi")
     * })
     */
    private $idaideCombi;



    /**
     * Get idaideCombiUnite
     *
     * @return integer
     */
    public function getIdaideCombiUnite()
    {
        return $this->idaideCombiUnite;
    }

    /**
     * Set idunite
     *
     * @param integer $idunite
     *
     * @return AidesCombiUnites
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
     * Set idaide
     *
     * @param \ConnecthysBundle\Entity\Aides $idaide
     *
     * @return AidesCombiUnites
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
     * Set idaideCombi
     *
     * @param \ConnecthysBundle\Entity\AidesCombinaisons $idaideCombi
     *
     * @return AidesCombiUnites
     */
    public function setIdaideCombi(\ConnecthysBundle\Entity\AidesCombinaisons $idaideCombi = null)
    {
        $this->idaideCombi = $idaideCombi;

        return $this;
    }

    /**
     * Get idaideCombi
     *
     * @return \ConnecthysBundle\Entity\AidesCombinaisons
     */
    public function getIdaideCombi()
    {
        return $this->idaideCombi;
    }
}
