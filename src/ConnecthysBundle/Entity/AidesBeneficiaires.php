<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AidesBeneficiaires
 *
 * @ORM\Table(name="aides_beneficiaires", indexes={@ORM\Index(name="IDaide", columns={"IDaide"}), @ORM\Index(name="IDindividu", columns={"IDindividu"})})
 * @ORM\Entity
 */
class AidesBeneficiaires
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaide_beneficiaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaideBeneficiaire;

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
     * @var \Individus
     *
     * @ORM\ManyToOne(targetEntity="Individus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDindividu", referencedColumnName="IDindividu")
     * })
     */
    private $idindividu;



    /**
     * Get idaideBeneficiaire
     *
     * @return integer
     */
    public function getIdaideBeneficiaire()
    {
        return $this->idaideBeneficiaire;
    }

    /**
     * Set idaide
     *
     * @param \ConnecthysBundle\Entity\Aides $idaide
     *
     * @return AidesBeneficiaires
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
     * Set idindividu
     *
     * @param \ConnecthysBundle\Entity\Individus $idindividu
     *
     * @return AidesBeneficiaires
     */
    public function setIdindividu(\ConnecthysBundle\Entity\Individus $idindividu = null)
    {
        $this->idindividu = $idindividu;

        return $this;
    }

    /**
     * Get idindividu
     *
     * @return \ConnecthysBundle\Entity\Individus
     */
    public function getIdindividu()
    {
        return $this->idindividu;
    }
}
