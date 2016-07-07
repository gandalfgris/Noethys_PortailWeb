<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatNominProfils
 *
 * @ORM\Table(name="etat_nomin_profils")
 * @ORM\Entity
 */
class EtatNominProfils
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDprofil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprofil;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="text", length=65535, nullable=true)
     */
    private $label;



    /**
     * Get idprofil
     *
     * @return integer
     */
    public function getIdprofil()
    {
        return $this->idprofil;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return EtatNominProfils
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }
}
