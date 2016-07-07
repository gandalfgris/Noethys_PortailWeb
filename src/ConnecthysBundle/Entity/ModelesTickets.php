<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelesTickets
 *
 * @ORM\Table(name="modeles_tickets")
 * @ORM\Entity
 */
class ModelesTickets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmodele", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodele;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="text", length=65535, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="lignes", type="text", length=65535, nullable=true)
     */
    private $lignes;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer", nullable=true)
     */
    private $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="interligne", type="integer", nullable=true)
     */
    private $interligne;

    /**
     * @var string
     *
     * @ORM\Column(name="imprimante", type="text", length=65535, nullable=true)
     */
    private $imprimante;



    /**
     * Get idmodele
     *
     * @return integer
     */
    public function getIdmodele()
    {
        return $this->idmodele;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return ModelesTickets
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return ModelesTickets
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
     * Set description
     *
     * @param string $description
     *
     * @return ModelesTickets
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set lignes
     *
     * @param string $lignes
     *
     * @return ModelesTickets
     */
    public function setLignes($lignes)
    {
        $this->lignes = $lignes;

        return $this;
    }

    /**
     * Get lignes
     *
     * @return string
     */
    public function getLignes()
    {
        return $this->lignes;
    }

    /**
     * Set defaut
     *
     * @param integer $defaut
     *
     * @return ModelesTickets
     */
    public function setDefaut($defaut)
    {
        $this->defaut = $defaut;

        return $this;
    }

    /**
     * Get defaut
     *
     * @return integer
     */
    public function getDefaut()
    {
        return $this->defaut;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     *
     * @return ModelesTickets
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return integer
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set interligne
     *
     * @param integer $interligne
     *
     * @return ModelesTickets
     */
    public function setInterligne($interligne)
    {
        $this->interligne = $interligne;

        return $this;
    }

    /**
     * Get interligne
     *
     * @return integer
     */
    public function getInterligne()
    {
        return $this->interligne;
    }

    /**
     * Set imprimante
     *
     * @param string $imprimante
     *
     * @return ModelesTickets
     */
    public function setImprimante($imprimante)
    {
        $this->imprimante = $imprimante;

        return $this;
    }

    /**
     * Get imprimante
     *
     * @return string
     */
    public function getImprimante()
    {
        return $this->imprimante;
    }
}
