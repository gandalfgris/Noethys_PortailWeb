<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComptesBancaires
 *
 * @ORM\Table(name="comptes_bancaires")
 * @ORM\Entity
 */
class ComptesBancaires
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDcompte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=50, nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaut", type="integer", nullable=true)
     */
    private $defaut;

    /**
     * @var string
     *
     * @ORM\Column(name="raison", type="text", length=65535, nullable=true)
     */
    private $raison;

    /**
     * @var string
     *
     * @ORM\Column(name="code_etab", type="text", length=65535, nullable=true)
     */
    private $codeEtab;

    /**
     * @var string
     *
     * @ORM\Column(name="code_guichet", type="text", length=65535, nullable=true)
     */
    private $codeGuichet;

    /**
     * @var string
     *
     * @ORM\Column(name="code_nne", type="text", length=65535, nullable=true)
     */
    private $codeNne;

    /**
     * @var string
     *
     * @ORM\Column(name="cle_rib", type="text", length=65535, nullable=true)
     */
    private $cleRib;

    /**
     * @var string
     *
     * @ORM\Column(name="cle_iban", type="text", length=65535, nullable=true)
     */
    private $cleIban;

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="text", length=65535, nullable=true)
     */
    private $iban;

    /**
     * @var string
     *
     * @ORM\Column(name="bic", type="text", length=65535, nullable=true)
     */
    private $bic;

    /**
     * @var string
     *
     * @ORM\Column(name="code_ics", type="text", length=65535, nullable=true)
     */
    private $codeIcs;



    /**
     * Get idcompte
     *
     * @return integer
     */
    public function getIdcompte()
    {
        return $this->idcompte;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return ComptesBancaires
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
     * Set numero
     *
     * @param string $numero
     *
     * @return ComptesBancaires
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set defaut
     *
     * @param integer $defaut
     *
     * @return ComptesBancaires
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
     * Set raison
     *
     * @param string $raison
     *
     * @return ComptesBancaires
     */
    public function setRaison($raison)
    {
        $this->raison = $raison;

        return $this;
    }

    /**
     * Get raison
     *
     * @return string
     */
    public function getRaison()
    {
        return $this->raison;
    }

    /**
     * Set codeEtab
     *
     * @param string $codeEtab
     *
     * @return ComptesBancaires
     */
    public function setCodeEtab($codeEtab)
    {
        $this->codeEtab = $codeEtab;

        return $this;
    }

    /**
     * Get codeEtab
     *
     * @return string
     */
    public function getCodeEtab()
    {
        return $this->codeEtab;
    }

    /**
     * Set codeGuichet
     *
     * @param string $codeGuichet
     *
     * @return ComptesBancaires
     */
    public function setCodeGuichet($codeGuichet)
    {
        $this->codeGuichet = $codeGuichet;

        return $this;
    }

    /**
     * Get codeGuichet
     *
     * @return string
     */
    public function getCodeGuichet()
    {
        return $this->codeGuichet;
    }

    /**
     * Set codeNne
     *
     * @param string $codeNne
     *
     * @return ComptesBancaires
     */
    public function setCodeNne($codeNne)
    {
        $this->codeNne = $codeNne;

        return $this;
    }

    /**
     * Get codeNne
     *
     * @return string
     */
    public function getCodeNne()
    {
        return $this->codeNne;
    }

    /**
     * Set cleRib
     *
     * @param string $cleRib
     *
     * @return ComptesBancaires
     */
    public function setCleRib($cleRib)
    {
        $this->cleRib = $cleRib;

        return $this;
    }

    /**
     * Get cleRib
     *
     * @return string
     */
    public function getCleRib()
    {
        return $this->cleRib;
    }

    /**
     * Set cleIban
     *
     * @param string $cleIban
     *
     * @return ComptesBancaires
     */
    public function setCleIban($cleIban)
    {
        $this->cleIban = $cleIban;

        return $this;
    }

    /**
     * Get cleIban
     *
     * @return string
     */
    public function getCleIban()
    {
        return $this->cleIban;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return ComptesBancaires
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set bic
     *
     * @param string $bic
     *
     * @return ComptesBancaires
     */
    public function setBic($bic)
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * Get bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Set codeIcs
     *
     * @param string $codeIcs
     *
     * @return ComptesBancaires
     */
    public function setCodeIcs($codeIcs)
    {
        $this->codeIcs = $codeIcs;

        return $this;
    }

    /**
     * Get codeIcs
     *
     * @return string
     */
    public function getCodeIcs()
    {
        return $this->codeIcs;
    }
}
