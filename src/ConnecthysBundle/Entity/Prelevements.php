<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prelevements
 *
 * @ORM\Table(name="prelevements", indexes={@ORM\Index(name="IDlot", columns={"IDlot"}), @ORM\Index(name="IDfamille", columns={"IDfamille"}), @ORM\Index(name="IDfacture", columns={"IDfacture"}), @ORM\Index(name="IDmandat", columns={"IDmandat"})})
 * @ORM\Entity
 */
class Prelevements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDprelevement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprelevement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDlot", type="integer", nullable=true)
     */
    private $idlot;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfamille", type="integer", nullable=true)
     */
    private $idfamille;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_etab", type="string", length=50, nullable=true)
     */
    private $prelevementEtab;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_guichet", type="string", length=50, nullable=true)
     */
    private $prelevementGuichet;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_numero", type="string", length=50, nullable=true)
     */
    private $prelevementNumero;

    /**
     * @var integer
     *
     * @ORM\Column(name="prelevement_banque", type="integer", nullable=true)
     */
    private $prelevementBanque;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_cle", type="string", length=50, nullable=true)
     */
    private $prelevementCle;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_iban", type="string", length=100, nullable=true)
     */
    private $prelevementIban;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_bic", type="string", length=100, nullable=true)
     */
    private $prelevementBic;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_reference_mandat", type="text", length=65535, nullable=true)
     */
    private $prelevementReferenceMandat;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_date_mandat", type="string", length=10, nullable=true)
     */
    private $prelevementDateMandat;

    /**
     * @var string
     *
     * @ORM\Column(name="titulaire", type="text", length=65535, nullable=true)
     */
    private $titulaire;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="text", length=65535, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDfacture", type="integer", nullable=true)
     */
    private $idfacture;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="text", length=65535, nullable=true)
     */
    private $libelle;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=100, nullable=true)
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmandat", type="integer", nullable=true)
     */
    private $idmandat;

    /**
     * @var string
     *
     * @ORM\Column(name="sequence", type="string", length=100, nullable=true)
     */
    private $sequence;



    /**
     * Get idprelevement
     *
     * @return integer
     */
    public function getIdprelevement()
    {
        return $this->idprelevement;
    }

    /**
     * Set idlot
     *
     * @param integer $idlot
     *
     * @return Prelevements
     */
    public function setIdlot($idlot)
    {
        $this->idlot = $idlot;

        return $this;
    }

    /**
     * Get idlot
     *
     * @return integer
     */
    public function getIdlot()
    {
        return $this->idlot;
    }

    /**
     * Set idfamille
     *
     * @param integer $idfamille
     *
     * @return Prelevements
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
     * Set prelevementEtab
     *
     * @param string $prelevementEtab
     *
     * @return Prelevements
     */
    public function setPrelevementEtab($prelevementEtab)
    {
        $this->prelevementEtab = $prelevementEtab;

        return $this;
    }

    /**
     * Get prelevementEtab
     *
     * @return string
     */
    public function getPrelevementEtab()
    {
        return $this->prelevementEtab;
    }

    /**
     * Set prelevementGuichet
     *
     * @param string $prelevementGuichet
     *
     * @return Prelevements
     */
    public function setPrelevementGuichet($prelevementGuichet)
    {
        $this->prelevementGuichet = $prelevementGuichet;

        return $this;
    }

    /**
     * Get prelevementGuichet
     *
     * @return string
     */
    public function getPrelevementGuichet()
    {
        return $this->prelevementGuichet;
    }

    /**
     * Set prelevementNumero
     *
     * @param string $prelevementNumero
     *
     * @return Prelevements
     */
    public function setPrelevementNumero($prelevementNumero)
    {
        $this->prelevementNumero = $prelevementNumero;

        return $this;
    }

    /**
     * Get prelevementNumero
     *
     * @return string
     */
    public function getPrelevementNumero()
    {
        return $this->prelevementNumero;
    }

    /**
     * Set prelevementBanque
     *
     * @param integer $prelevementBanque
     *
     * @return Prelevements
     */
    public function setPrelevementBanque($prelevementBanque)
    {
        $this->prelevementBanque = $prelevementBanque;

        return $this;
    }

    /**
     * Get prelevementBanque
     *
     * @return integer
     */
    public function getPrelevementBanque()
    {
        return $this->prelevementBanque;
    }

    /**
     * Set prelevementCle
     *
     * @param string $prelevementCle
     *
     * @return Prelevements
     */
    public function setPrelevementCle($prelevementCle)
    {
        $this->prelevementCle = $prelevementCle;

        return $this;
    }

    /**
     * Get prelevementCle
     *
     * @return string
     */
    public function getPrelevementCle()
    {
        return $this->prelevementCle;
    }

    /**
     * Set prelevementIban
     *
     * @param string $prelevementIban
     *
     * @return Prelevements
     */
    public function setPrelevementIban($prelevementIban)
    {
        $this->prelevementIban = $prelevementIban;

        return $this;
    }

    /**
     * Get prelevementIban
     *
     * @return string
     */
    public function getPrelevementIban()
    {
        return $this->prelevementIban;
    }

    /**
     * Set prelevementBic
     *
     * @param string $prelevementBic
     *
     * @return Prelevements
     */
    public function setPrelevementBic($prelevementBic)
    {
        $this->prelevementBic = $prelevementBic;

        return $this;
    }

    /**
     * Get prelevementBic
     *
     * @return string
     */
    public function getPrelevementBic()
    {
        return $this->prelevementBic;
    }

    /**
     * Set prelevementReferenceMandat
     *
     * @param string $prelevementReferenceMandat
     *
     * @return Prelevements
     */
    public function setPrelevementReferenceMandat($prelevementReferenceMandat)
    {
        $this->prelevementReferenceMandat = $prelevementReferenceMandat;

        return $this;
    }

    /**
     * Get prelevementReferenceMandat
     *
     * @return string
     */
    public function getPrelevementReferenceMandat()
    {
        return $this->prelevementReferenceMandat;
    }

    /**
     * Set prelevementDateMandat
     *
     * @param string $prelevementDateMandat
     *
     * @return Prelevements
     */
    public function setPrelevementDateMandat($prelevementDateMandat)
    {
        $this->prelevementDateMandat = $prelevementDateMandat;

        return $this;
    }

    /**
     * Get prelevementDateMandat
     *
     * @return string
     */
    public function getPrelevementDateMandat()
    {
        return $this->prelevementDateMandat;
    }

    /**
     * Set titulaire
     *
     * @param string $titulaire
     *
     * @return Prelevements
     */
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    /**
     * Get titulaire
     *
     * @return string
     */
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Prelevements
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set idfacture
     *
     * @param integer $idfacture
     *
     * @return Prelevements
     */
    public function setIdfacture($idfacture)
    {
        $this->idfacture = $idfacture;

        return $this;
    }

    /**
     * Get idfacture
     *
     * @return integer
     */
    public function getIdfacture()
    {
        return $this->idfacture;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Prelevements
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Prelevements
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Prelevements
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set idmandat
     *
     * @param integer $idmandat
     *
     * @return Prelevements
     */
    public function setIdmandat($idmandat)
    {
        $this->idmandat = $idmandat;

        return $this;
    }

    /**
     * Get idmandat
     *
     * @return integer
     */
    public function getIdmandat()
    {
        return $this->idmandat;
    }

    /**
     * Set sequence
     *
     * @param string $sequence
     *
     * @return Prelevements
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return string
     */
    public function getSequence()
    {
        return $this->sequence;
    }
}
