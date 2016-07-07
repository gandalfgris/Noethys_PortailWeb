<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TextesRappels
 *
 * @ORM\Table(name="textes_rappels")
 * @ORM\Entity
 */
class TextesRappels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDtexte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtexte;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=50, nullable=true)
     */
    private $couleur;

    /**
     * @var integer
     *
     * @ORM\Column(name="retard_min", type="integer", nullable=true)
     */
    private $retardMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="retard_max", type="integer", nullable=true)
     */
    private $retardMax;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_xml", type="text", length=65535, nullable=true)
     */
    private $texteXml;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_pdf", type="text", length=65535, nullable=true)
     */
    private $textePdf;



    /**
     * Get idtexte
     *
     * @return integer
     */
    public function getIdtexte()
    {
        return $this->idtexte;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return TextesRappels
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
     * Set couleur
     *
     * @param string $couleur
     *
     * @return TextesRappels
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set retardMin
     *
     * @param integer $retardMin
     *
     * @return TextesRappels
     */
    public function setRetardMin($retardMin)
    {
        $this->retardMin = $retardMin;

        return $this;
    }

    /**
     * Get retardMin
     *
     * @return integer
     */
    public function getRetardMin()
    {
        return $this->retardMin;
    }

    /**
     * Set retardMax
     *
     * @param integer $retardMax
     *
     * @return TextesRappels
     */
    public function setRetardMax($retardMax)
    {
        $this->retardMax = $retardMax;

        return $this;
    }

    /**
     * Get retardMax
     *
     * @return integer
     */
    public function getRetardMax()
    {
        return $this->retardMax;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return TextesRappels
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

    /**
     * Set texteXml
     *
     * @param string $texteXml
     *
     * @return TextesRappels
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
     * Set textePdf
     *
     * @param string $textePdf
     *
     * @return TextesRappels
     */
    public function setTextePdf($textePdf)
    {
        $this->textePdf = $textePdf;

        return $this;
    }

    /**
     * Get textePdf
     *
     * @return string
     */
    public function getTextePdf()
    {
        return $this->textePdf;
    }
}
