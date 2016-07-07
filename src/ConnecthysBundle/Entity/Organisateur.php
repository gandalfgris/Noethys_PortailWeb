<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisateur
 *
 * @ORM\Table(name="organisateur")
 * @ORM\Entity
 */
class Organisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDorganisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idorganisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=200, nullable=true)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=100, nullable=true)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="num_agrement", type="string", length=100, nullable=true)
     */
    private $numAgrement;

    /**
     * @var string
     *
     * @ORM\Column(name="num_siret", type="string", length=100, nullable=true)
     */
    private $numSiret;

    /**
     * @var string
     *
     * @ORM\Column(name="code_ape", type="string", length=100, nullable=true)
     */
    private $codeApe;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="blob", nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="gps", type="string", length=200, nullable=true)
     */
    private $gps;



    /**
     * Get idorganisateur
     *
     * @return integer
     */
    public function getIdorganisateur()
    {
        return $this->idorganisateur;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Organisateur
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
     * Set rue
     *
     * @param string $rue
     *
     * @return Organisateur
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Organisateur
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Organisateur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Organisateur
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Organisateur
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Organisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Organisateur
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set numAgrement
     *
     * @param string $numAgrement
     *
     * @return Organisateur
     */
    public function setNumAgrement($numAgrement)
    {
        $this->numAgrement = $numAgrement;

        return $this;
    }

    /**
     * Get numAgrement
     *
     * @return string
     */
    public function getNumAgrement()
    {
        return $this->numAgrement;
    }

    /**
     * Set numSiret
     *
     * @param string $numSiret
     *
     * @return Organisateur
     */
    public function setNumSiret($numSiret)
    {
        $this->numSiret = $numSiret;

        return $this;
    }

    /**
     * Get numSiret
     *
     * @return string
     */
    public function getNumSiret()
    {
        return $this->numSiret;
    }

    /**
     * Set codeApe
     *
     * @param string $codeApe
     *
     * @return Organisateur
     */
    public function setCodeApe($codeApe)
    {
        $this->codeApe = $codeApe;

        return $this;
    }

    /**
     * Get codeApe
     *
     * @return string
     */
    public function getCodeApe()
    {
        return $this->codeApe;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Organisateur
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set gps
     *
     * @param string $gps
     *
     * @return Organisateur
     */
    public function setGps($gps)
    {
        $this->gps = $gps;

        return $this;
    }

    /**
     * Get gps
     *
     * @return string
     */
    public function getGps()
    {
        return $this->gps;
    }
}
