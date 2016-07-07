<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BadgeageMessages
 *
 * @ORM\Table(name="badgeage_messages", indexes={@ORM\Index(name="IDprocedure", columns={"IDprocedure"}), @ORM\Index(name="IDaction", columns={"IDaction"})})
 * @ORM\Entity
 */
class BadgeageMessages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmessage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmessage;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var \BadgeageProcedures
     *
     * @ORM\ManyToOne(targetEntity="BadgeageProcedures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDprocedure", referencedColumnName="IDprocedure")
     * })
     */
    private $idprocedure;

    /**
     * @var \BadgeageActions
     *
     * @ORM\ManyToOne(targetEntity="BadgeageActions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDaction", referencedColumnName="IDaction")
     * })
     */
    private $idaction;



    /**
     * Get idmessage
     *
     * @return integer
     */
    public function getIdmessage()
    {
        return $this->idmessage;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return BadgeageMessages
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set idprocedure
     *
     * @param \ConnecthysBundle\Entity\BadgeageProcedures $idprocedure
     *
     * @return BadgeageMessages
     */
    public function setIdprocedure(\ConnecthysBundle\Entity\BadgeageProcedures $idprocedure = null)
    {
        $this->idprocedure = $idprocedure;

        return $this;
    }

    /**
     * Get idprocedure
     *
     * @return \ConnecthysBundle\Entity\BadgeageProcedures
     */
    public function getIdprocedure()
    {
        return $this->idprocedure;
    }

    /**
     * Set idaction
     *
     * @param \ConnecthysBundle\Entity\BadgeageActions $idaction
     *
     * @return BadgeageMessages
     */
    public function setIdaction(\ConnecthysBundle\Entity\BadgeageActions $idaction = null)
    {
        $this->idaction = $idaction;

        return $this;
    }

    /**
     * Get idaction
     *
     * @return \ConnecthysBundle\Entity\BadgeageActions
     */
    public function getIdaction()
    {
        return $this->idaction;
    }
}
