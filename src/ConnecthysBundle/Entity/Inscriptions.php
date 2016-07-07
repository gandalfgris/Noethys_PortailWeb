<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscriptions
 *
 * @ORM\Table(name="inscriptions", indexes={@ORM\Index(name="index_inscriptions_IDfamille", columns={"IDfamille"}), @ORM\Index(name="index_inscriptions_IDindividu", columns={"IDindividu"})})
 * @ORM\Entity
 */
class Inscriptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDinscription", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDindividu", type="integer", nullable=true)
     */
    private $idindividu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDgroupe", type="integer", nullable=true)
     */
    private $idgroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie_tarif", type="integer", nullable=true)
     */
    private $idcategorieTarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte_payeur", type="integer", nullable=true)
     */
    private $idcomptePayeur;

    /**
     * @var string
     *
     * @ORM\Column(name="date_inscription", type="string", length=10, nullable=true)
     */
    private $dateInscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="parti", type="integer", nullable=true)
     */
    private $parti;



    /**
     * Get idinscription
     *
     * @return integer
     */
    public function getIdinscription()
    {
        return $this->idinscription;
    }

    /**
     * Set idindividu
     *
     * @param integer $idindividu
     *
     * @return Inscriptions
     */
    public function setIdindividu($idindividu)
    {
        $this->idindividu = $idindividu;

        return $this;
    }

    /**
     * Get idindividu
     *
     * @return integer
     */
    public function getIdindividu()
    {
        return $this->idindividu;
    }

    /**
     * Set idfamille
     *
     * @param integer $idfamille
     *
     * @return Inscriptions
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
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return Inscriptions
     */
    public function setIdactivite($idactivite)
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    /**
     * Get idactivite
     *
     * @return integer
     */
    public function getIdactivite()
    {
        return $this->idactivite;
    }

    /**
     * Set idgroupe
     *
     * @param integer $idgroupe
     *
     * @return Inscriptions
     */
    public function setIdgroupe($idgroupe)
    {
        $this->idgroupe = $idgroupe;

        return $this;
    }

    /**
     * Get idgroupe
     *
     * @return integer
     */
    public function getIdgroupe()
    {
        return $this->idgroupe;
    }

    /**
     * Set idcategorieTarif
     *
     * @param integer $idcategorieTarif
     *
     * @return Inscriptions
     */
    public function setIdcategorieTarif($idcategorieTarif)
    {
        $this->idcategorieTarif = $idcategorieTarif;

        return $this;
    }

    /**
     * Get idcategorieTarif
     *
     * @return integer
     */
    public function getIdcategorieTarif()
    {
        return $this->idcategorieTarif;
    }

    /**
     * Set idcomptePayeur
     *
     * @param integer $idcomptePayeur
     *
     * @return Inscriptions
     */
    public function setIdcomptePayeur($idcomptePayeur)
    {
        $this->idcomptePayeur = $idcomptePayeur;

        return $this;
    }

    /**
     * Get idcomptePayeur
     *
     * @return integer
     */
    public function getIdcomptePayeur()
    {
        return $this->idcomptePayeur;
    }

    /**
     * Set dateInscription
     *
     * @param string $dateInscription
     *
     * @return Inscriptions
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return string
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set parti
     *
     * @param integer $parti
     *
     * @return Inscriptions
     */
    public function setParti($parti)
    {
        $this->parti = $parti;

        return $this;
    }

    /**
     * Get parti
     *
     * @return integer
     */
    public function getParti()
    {
        return $this->parti;
    }
}
