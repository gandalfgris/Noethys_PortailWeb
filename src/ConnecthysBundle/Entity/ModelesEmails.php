<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelesEmails
 *
 * @ORM\Table(name="modeles_emails")
 * @ORM\Entity
 */
class ModelesEmails
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
     * @ORM\Column(name="objet", type="text", length=65535, nullable=true)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_xml", type="text", length=65535, nullable=true)
     */
    private $texteXml;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDadresse", type="integer", nullable=true)
     */
    private $idadresse;

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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return ModelesEmails
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
     * @return ModelesEmails
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
     * @return ModelesEmails
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
     * Set objet
     *
     * @param string $objet
     *
     * @return ModelesEmails
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set texteXml
     *
     * @param string $texteXml
     *
     * @return ModelesEmails
     */
    public function setTexteXml($texteXml)
    {
        $this->texteXml = $texteXml;

        return $this;
    }

    /**
     * Get texteXml
     *
     * @return string
     */
    public function getTexteXml()
    {
        return $this->texteXml;
    }

    /**
     * Set idadresse
     *
     * @param integer $idadresse
     *
     * @return ModelesEmails
     */
    public function setIdadresse($idadresse)
    {
        $this->idadresse = $idadresse;

        return $this;
    }

    /**
     * Get idadresse
     *
     * @return integer
     */
    public function getIdadresse()
    {
        return $this->idadresse;
    }

    /**
     * Set defaut
     *
     * @param integer $defaut
     *
     * @return ModelesEmails
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
