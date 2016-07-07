<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payeurs
 *
 * @ORM\Table(name="payeurs", indexes={@ORM\Index(name="IDcompte_payeur", columns={"IDcompte_payeur"})})
 * @ORM\Entity
 */
class Payeurs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDpayeur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpayeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=true)
     */
    private $idcomptePayeur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;



    /**
     * Get idpayeur
     *
     * @return integer
     */
    public function getIdpayeur()
    {
        return $this->idpayeur;
    }

    /**
     * Set idcomptePayeur
     *
     * @param integer $idcomptePayeur
     *
     * @return Payeurs
     */
    public function setIdcomptePayeur($idcomptePayeur)
    {
        $this->idcomptePayeur = $idcomptePayeur;

        return $this;
    }

    /**
     * Get idcomptePayeur
     *
     * @return integer
     */
    public function getIdcomptePayeur()
    {
        return $this->idcomptePayeur;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Payeurs
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}
