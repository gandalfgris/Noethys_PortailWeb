<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recus
 *
 * @ORM\Table(name="recus", indexes={@ORM\Index(name="IDfamille", columns={"IDfamille"}), @ORM\Index(name="IDutilisateur", columns={"IDutilisateur"}), @ORM\Index(name="IDreglement", columns={"IDreglement"})})
 * @ORM\Entity
 */
class Recus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDrecu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecu;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var string
     *
     * @ORM\Column(name="date_edition", type="string", length=10, nullable=true)
     */
    private $dateEdition;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDreglement", type="integer", nullable=true)
     */
    private $idreglement;



    /**
     * Get idrecu
     *
     * @return integer
     */
    public function getIdrecu()
    {
        return $this->idrecu;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Recus
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set idfamille
     *
     * @param integer $idfamille
     *
     * @return Recus
     */
    public function setIdfamille($idfamille)
    {
        $this->idfamille = $idfamille;

        return $this;
    }

    /**
     * Get idfamille
     *
     * @return integer
     */
    public function getIdfamille()
    {
        return $this->idfamille;
    }

    /**
     * Set dateEdition
     *
     * @param string $dateEdition
     *
     * @return Recus
     */
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;

        return $this;
    }

    /**
     * Get dateEdition
     *
     * @return string
     */
    public function getDateEdition()
    {
        return $this->dateEdition;
    }

    /**
     * Set idutilisateur
     *
     * @param integer $idutilisateur
     *
     * @return Recus
     */
    public function setIdutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return integer
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Set idreglement
     *
     * @param integer $idreglement
     *
     * @return Recus
     */
    public function setIdreglement($idreglement)
    {
        $this->idreglement = $idreglement;

        return $this;
    }

    /**
     * Get idreglement
     *
     * @return integer
     */
    public function getIdreglement()
    {
        return $this->idreglement;
    }
}
