<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturesPrefixes
 *
 * @ORM\Table(name="factures_prefixes")
 * @ORM\Entity
 */
class FacturesPrefixes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDprefixe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprefixe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prefixe", type="string", length=100, nullable=true)
     */
    private $prefixe;



    /**
     * Get idprefixe
     *
     * @return integer
     */
    public function getIdprefixe()
    {
        return $this->idprefixe;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return FacturesPrefixes
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

    /**
     * Set prefixe
     *
     * @param string $prefixe
     *
     * @return FacturesPrefixes
     */
    public function setPrefixe($prefixe)
    {
        $this->prefixe = $prefixe;

        return $this;
    }

    /**
     * Get prefixe
     *
     * @return string
     */
    public function getPrefixe()
    {
        return $this->prefixe;
    }
}
