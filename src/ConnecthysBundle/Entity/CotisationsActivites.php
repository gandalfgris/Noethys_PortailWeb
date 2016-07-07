<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CotisationsActivites
 *
 * @ORM\Table(name="cotisations_activites", indexes={@ORM\Index(name="IDactivite", columns={"IDactivite"}), @ORM\Index(name="IDtype_cotisation", columns={"IDtype_cotisation"})})
 * @ORM\Entity
 */
class CotisationsActivites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcotisation_activite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcotisationActivite;

    /**
     * @var \Activites
     *
     * @ORM\ManyToOne(targetEntity="Activites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDactivite", referencedColumnName="IDactivite")
     * })
     */
    private $idactivite;

    /**
     * @var \TypesCotisations
     *
     * @ORM\ManyToOne(targetEntity="TypesCotisations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDtype_cotisation", referencedColumnName="IDtype_cotisation")
     * })
     */
    private $idtypeCotisation;



    /**
     * Get idcotisationActivite
     *
     * @return integer
     */
    public function getIdcotisationActivite()
    {
        return $this->idcotisationActivite;
    }

    /**
     * Set idactivite
     *
     * @param \ConnecthysBundle\Entity\Activites $idactivite
     *
     * @return CotisationsActivites
     */
    public function setIdactivite(\ConnecthysBundle\Entity\Activites $idactivite = null)
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    /**
     * Get idactivite
     *
     * @return \ConnecthysBundle\Entity\Activites
     */
    public function getIdactivite()
    {
        return $this->idactivite;
    }

    /**
     * Set idtypeCotisation
     *
     * @param \ConnecthysBundle\Entity\TypesCotisations $idtypeCotisation
     *
     * @return CotisationsActivites
     */
    public function setIdtypeCotisation(\ConnecthysBundle\Entity\TypesCotisations $idtypeCotisation = null)
    {
        $this->idtypeCotisation = $idtypeCotisation;

        return $this;
    }

    /**
     * Get idtypeCotisation
     *
     * @return \ConnecthysBundle\Entity\TypesCotisations
     */
    public function getIdtypeCotisation()
    {
        return $this->idtypeCotisation;
    }
}
