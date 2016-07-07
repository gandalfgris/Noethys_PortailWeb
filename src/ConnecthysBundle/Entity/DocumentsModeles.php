<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentsModeles
 *
 * @ORM\Table(name="documents_modeles")
 * @ORM\Entity
 */
class DocumentsModeles
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
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=200, nullable=true)
     */
    private $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="supprimable", type="integer", nullable=true)
     */
    private $supprimable;

    /**
     * @var integer
     *
     * @ORM\Column(name="largeur", type="integer", nullable=true)
     */
    private $largeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="hauteur", type="integer", nullable=true)
     */
    private $hauteur;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true)
     */
    private $observations;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfond", type="integer", nullable=true)
     */
    private $idfond;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return DocumentsModeles
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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return DocumentsModeles
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
     * Set supprimable
     *
     * @param integer $supprimable
     *
     * @return DocumentsModeles
     */
    public function setSupprimable($supprimable)
    {
        $this->supprimable = $supprimable;

        return $this;
    }

    /**
     * Get supprimable
     *
     * @return integer
     */
    public function getSupprimable()
    {
        return $this->supprimable;
    }

    /**
     * Set largeur
     *
     * @param integer $largeur
     *
     * @return DocumentsModeles
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return integer
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set hauteur
     *
     * @param integer $hauteur
     *
     * @return DocumentsModeles
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get hauteur
     *
     * @return integer
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return DocumentsModeles
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set idfond
     *
     * @param integer $idfond
     *
     * @return DocumentsModeles
     */
    public function setIdfond($idfond)
    {
        $this->idfond = $idfond;

        return $this;
    }

    /**
     * Get idfond
     *
     * @return integer
     */
    public function getIdfond()
    {
        return $this->idfond;
    }

    /**
     * Set defaut
     *
     * @param integer $defaut
     *
     * @return DocumentsModeles
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
}
