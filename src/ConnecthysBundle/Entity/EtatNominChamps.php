<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatNominChamps
 *
 * @ORM\Table(name="etat_nomin_champs")
 * @ORM\Entity
 */
class EtatNominChamps
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDchamp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idchamp;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="text", length=65535, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="text", length=65535, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="formule", type="text", length=65535, nullable=true)
     */
    private $formule;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text", length=65535, nullable=true)
     */
    private $titre;



    /**
     * Get idchamp
     *
     * @return integer
     */
    public function getIdchamp()
    {
        return $this->idchamp;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return EtatNominChamps
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return EtatNominChamps
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

    /**
     * Set formule
     *
     * @param string $formule
     *
     * @return EtatNominChamps
     */
    public function setFormule($formule)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get formule
     *
     * @return string
     */
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return EtatNominChamps
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
}
