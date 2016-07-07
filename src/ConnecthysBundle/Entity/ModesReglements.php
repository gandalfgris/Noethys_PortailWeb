<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModesReglements
 *
 * @ORM\Table(name="modes_reglements")
 * @ORM\Entity
 */
class ModesReglements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDmode", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmode;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=100, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_piece", type="string", length=10, nullable=true)
     */
    private $numeroPiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_chiffres", type="integer", nullable=true)
     */
    private $nbreChiffres;

    /**
     * @var string
     *
     * @ORM\Column(name="frais_gestion", type="string", length=10, nullable=true)
     */
    private $fraisGestion;

    /**
     * @var float
     *
     * @ORM\Column(name="frais_montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $fraisMontant;

    /**
     * @var float
     *
     * @ORM\Column(name="frais_pourcentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $fraisPourcentage;

    /**
     * @var string
     *
     * @ORM\Column(name="frais_arrondi", type="string", length=20, nullable=true)
     */
    private $fraisArrondi;

    /**
     * @var string
     *
     * @ORM\Column(name="frais_label", type="string", length=200, nullable=true)
     */
    private $fraisLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="type_comptable", type="string", length=200, nullable=true)
     */
    private $typeComptable;

    /**
     * @var string
     *
     * @ORM\Column(name="code_compta", type="string", length=200, nullable=true)
     */
    private $codeCompta;



    /**
     * Get idmode
     *
     * @return integer
     */
    public function getIdmode()
    {
        return $this->idmode;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return ModesReglements
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
     * Set image
     *
     * @param string $image
     *
     * @return ModesReglements
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set numeroPiece
     *
     * @param string $numeroPiece
     *
     * @return ModesReglements
     */
    public function setNumeroPiece($numeroPiece)
    {
        $this->numeroPiece = $numeroPiece;

        return $this;
    }

    /**
     * Get numeroPiece
     *
     * @return string
     */
    public function getNumeroPiece()
    {
        return $this->numeroPiece;
    }

    /**
     * Set nbreChiffres
     *
     * @param integer $nbreChiffres
     *
     * @return ModesReglements
     */
    public function setNbreChiffres($nbreChiffres)
    {
        $this->nbreChiffres = $nbreChiffres;

        return $this;
    }

    /**
     * Get nbreChiffres
     *
     * @return integer
     */
    public function getNbreChiffres()
    {
        return $this->nbreChiffres;
    }

    /**
     * Set fraisGestion
     *
     * @param string $fraisGestion
     *
     * @return ModesReglements
     */
    public function setFraisGestion($fraisGestion)
    {
        $this->fraisGestion = $fraisGestion;

        return $this;
    }

    /**
     * Get fraisGestion
     *
     * @return string
     */
    public function getFraisGestion()
    {
        return $this->fraisGestion;
    }

    /**
     * Set fraisMontant
     *
     * @param float $fraisMontant
     *
     * @return ModesReglements
     */
    public function setFraisMontant($fraisMontant)
    {
        $this->fraisMontant = $fraisMontant;

        return $this;
    }

    /**
     * Get fraisMontant
     *
     * @return float
     */
    public function getFraisMontant()
    {
        return $this->fraisMontant;
    }

    /**
     * Set fraisPourcentage
     *
     * @param float $fraisPourcentage
     *
     * @return ModesReglements
     */
    public function setFraisPourcentage($fraisPourcentage)
    {
        $this->fraisPourcentage = $fraisPourcentage;

        return $this;
    }

    /**
     * Get fraisPourcentage
     *
     * @return float
     */
    public function getFraisPourcentage()
    {
        return $this->fraisPourcentage;
    }

    /**
     * Set fraisArrondi
     *
     * @param string $fraisArrondi
     *
     * @return ModesReglements
     */
    public function setFraisArrondi($fraisArrondi)
    {
        $this->fraisArrondi = $fraisArrondi;

        return $this;
    }

    /**
     * Get fraisArrondi
     *
     * @return string
     */
    public function getFraisArrondi()
    {
        return $this->fraisArrondi;
    }

    /**
     * Set fraisLabel
     *
     * @param string $fraisLabel
     *
     * @return ModesReglements
     */
    public function setFraisLabel($fraisLabel)
    {
        $this->fraisLabel = $fraisLabel;

        return $this;
    }

    /**
     * Get fraisLabel
     *
     * @return string
     */
    public function getFraisLabel()
    {
        return $this->fraisLabel;
    }

    /**
     * Set typeComptable
     *
     * @param string $typeComptable
     *
     * @return ModesReglements
     */
    public function setTypeComptable($typeComptable)
    {
        $this->typeComptable = $typeComptable;

        return $this;
    }

    /**
     * Get typeComptable
     *
     * @return string
     */
    public function getTypeComptable()
    {
        return $this->typeComptable;
    }

    /**
     * Set codeCompta
     *
     * @param string $codeCompta
     *
     * @return ModesReglements
     */
    public function setCodeCompta($codeCompta)
    {
        $this->codeCompta = $codeCompta;

        return $this;
    }

    /**
     * Get codeCompta
     *
     * @return string
     */
    public function getCodeCompta()
    {
        return $this->codeCompta;
    }
}
