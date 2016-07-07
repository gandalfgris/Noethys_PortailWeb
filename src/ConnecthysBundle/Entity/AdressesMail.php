<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdressesMail
 *
 * @ORM\Table(name="adresses_mail")
 * @ORM\Entity
 */
class AdressesMail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDadresse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadresse;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=200, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="motdepasse", type="string", length=200, nullable=true)
     */
    private $motdepasse;

    /**
     * @var string
     *
     * @ORM\Column(name="smtp", type="string", length=200, nullable=true)
     */
    private $smtp;

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="integer", nullable=true)
     */
    private $port;

    /**
     * @var integer
     *
     * @ORM\Column(name="connexionssl", type="integer", nullable=true)
     */
    private $connexionssl;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;

    /**
     * @var integer
     *
     * @ORM\Column(name="connexionAuthentifiee", type="integer", nullable=true)
     */
    private $connexionauthentifiee;

    /**
     * @var integer
     *
     * @ORM\Column(name="startTLS", type="integer", nullable=true)
     */
    private $starttls;



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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return AdressesMail
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set motdepasse
     *
     * @param string $motdepasse
     *
     * @return AdressesMail
     */
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    /**
     * Get motdepasse
     *
     * @return string
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * Set smtp
     *
     * @param string $smtp
     *
     * @return AdressesMail
     */
    public function setSmtp($smtp)
    {
        $this->smtp = $smtp;

        return $this;
    }

    /**
     * Get smtp
     *
     * @return string
     */
    public function getSmtp()
    {
        return $this->smtp;
    }

    /**
     * Set port
     *
     * @param integer $port
     *
     * @return AdressesMail
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set connexionssl
     *
     * @param integer $connexionssl
     *
     * @return AdressesMail
     */
    public function setConnexionssl($connexionssl)
    {
        $this->connexionssl = $connexionssl;

        return $this;
    }

    /**
     * Get connexionssl
     *
     * @return integer
     */
    public function getConnexionssl()
    {
        return $this->connexionssl;
    }

    /**
     * Set defaut
     *
     * @param integer $defaut
     *
     * @return AdressesMail
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
     * Set connexionauthentifiee
     *
     * @param integer $connexionauthentifiee
     *
     * @return AdressesMail
     */
    public function setConnexionauthentifiee($connexionauthentifiee)
    {
        $this->connexionauthentifiee = $connexionauthentifiee;

        return $this;
    }

    /**
     * Get connexionauthentifiee
     *
     * @return integer
     */
    public function getConnexionauthentifiee()
    {
        return $this->connexionauthentifiee;
    }

    /**
     * Set starttls
     *
     * @param integer $starttls
     *
     * @return AdressesMail
     */
    public function setStarttls($starttls)
    {
        $this->starttls = $starttls;

        return $this;
    }

    /**
     * Get starttls
     *
     * @return integer
     */
    public function getStarttls()
    {
        return $this->starttls;
    }
}
