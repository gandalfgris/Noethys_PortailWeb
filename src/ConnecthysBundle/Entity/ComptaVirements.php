<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptaVirements
 *
 * @ORM\Table(name="compta_virements", indexes={@ORM\Index(name="IDoperation_debit", columns={"IDoperation_debit"}), @ORM\Index(name="IDoperation_credit", columns={"IDoperation_credit"})})
 * @ORM\Entity
 */
class ComptaVirements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDvirement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvirement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDoperation_debit", type="integer", nullable=true)
     */
    private $idoperationDebit;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDoperation_credit", type="integer", nullable=true)
     */
    private $idoperationCredit;



    /**
     * Get idvirement
     *
     * @return integer
     */
    public function getIdvirement()
    {
        return $this->idvirement;
    }

    /**
     * Set idoperationDebit
     *
     * @param integer $idoperationDebit
     *
     * @return ComptaVirements
     */
    public function setIdoperationDebit($idoperationDebit)
    {
        $this->idoperationDebit = $idoperationDebit;

        return $this;
    }

    /**
     * Get idoperationDebit
     *
     * @return integer
     */
    public function getIdoperationDebit()
    {
        return $this->idoperationDebit;
    }

    /**
     * Set idoperationCredit
     *
     * @param integer $idoperationCredit
     *
     * @return ComptaVirements
     */
    public function setIdoperationCredit($idoperationCredit)
    {
        $this->idoperationCredit = $idoperationCredit;

        return $this;
    }

    /**
     * Get idoperationCredit
     *
     * @return integer
     */
    public function getIdoperationCredit()
    {
        return $this->idoperationCredit;
    }
}
