<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrectionsPhoniques
 *
 * @ORM\Table(name="corrections_phoniques")
 * @ORM\Entity
 */
class CorrectionsPhoniques
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcorrection", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcorrection;

    /**
     * @var string
     *
     * @ORM\Column(name="mot", type="text", length=65535, nullable=true)
     */
    private $mot;

    /**
     * @var string
     *
     * @ORM\Column(name="correction", type="text", length=65535, nullable=true)
     */
    private $correction;



    /**
     * Get idcorrection
     *
     * @return integer
     */
    public function getIdcorrection()
    {
        return $this->idcorrection;
    }

    /**
     * Set mot
     *
     * @param string $mot
     *
     * @return CorrectionsPhoniques
     */
    public function setMot($mot)
    {
        $this->mot = $mot;

        return $this;
    }

    /**
     * Get mot
     *
     * @return string
     */
    public function getMot()
    {
        return $this->mot;
    }

    /**
     * Set correction
     *
     * @param string $correction
     *
     * @return CorrectionsPhoniques
     */
    public function setCorrection($correction)
    {
        $this->correction = $correction;

        return $this;
    }

    /**
     * Get correction
     *
     * @return string
     */
    public function getCorrection()
    {
        return $this->correction;
    }
}
