<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BadgeageProcedures
 *
 * @ORM\Table(name="badgeage_procedures")
 * @ORM\Entity
 */
class BadgeageProcedures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDprocedure", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprocedure;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="text", length=65535, nullable=true)
     */
    private $style;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="text", length=65535, nullable=true)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="systeme", type="text", length=65535, nullable=true)
     */
    private $systeme;

    /**
     * @var string
     *
     * @ORM\Column(name="activites", type="text", length=65535, nullable=true)
     */
    private $activites;

    /**
     * @var integer
     *
     * @ORM\Column(name="confirmation", type="integer", nullable=true)
     */
    private $confirmation;

    /**
     * @var integer
     *
     * @ORM\Column(name="vocal", type="integer", nullable=true)
     */
    private $vocal;

    /**
     * @var integer
     *
     * @ORM\Column(name="tutoiement", type="integer", nullable=true)
     */
    private $tutoiement;



    /**
     * Get idprocedure
     *
     * @return integer
     */
    public function getIdprocedure()
    {
        return $this->idprocedure;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return BadgeageProcedures
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
     * Set defaut
     *
     * @param integer $defaut
     *
     * @return BadgeageProcedures
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
     * Set style
     *
     * @param string $style
     *
     * @return BadgeageProcedures
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set theme
     *
     * @param string $theme
     *
     * @return BadgeageProcedures
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return BadgeageProcedures
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
     * Set systeme
     *
     * @param string $systeme
     *
     * @return BadgeageProcedures
     */
    public function setSysteme($systeme)
    {
        $this->systeme = $systeme;

        return $this;
    }

    /**
     * Get systeme
     *
     * @return string
     */
    public function getSysteme()
    {
        return $this->systeme;
    }

    /**
     * Set activites
     *
     * @param string $activites
     *
     * @return BadgeageProcedures
     */
    public function setActivites($activites)
    {
        $this->activites = $activites;

        return $this;
    }

    /**
     * Get activites
     *
     * @return string
     */
    public function getActivites()
    {
        return $this->activites;
    }

    /**
     * Set confirmation
     *
     * @param integer $confirmation
     *
     * @return BadgeageProcedures
     */
    public function setConfirmation($confirmation)
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    /**
     * Get confirmation
     *
     * @return integer
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * Set vocal
     *
     * @param integer $vocal
     *
     * @return BadgeageProcedures
     */
    public function setVocal($vocal)
    {
        $this->vocal = $vocal;

        return $this;
    }

    /**
     * Get vocal
     *
     * @return integer
     */
    public function getVocal()
    {
        return $this->vocal;
    }

    /**
     * Set tutoiement
     *
     * @param integer $tutoiement
     *
     * @return BadgeageProcedures
     */
    public function setTutoiement($tutoiement)
    {
        $this->tutoiement = $tutoiement;

        return $this;
    }

    /**
     * Get tutoiement
     *
     * @return integer
     */
    public function getTutoiement()
    {
        return $this->tutoiement;
    }
}
