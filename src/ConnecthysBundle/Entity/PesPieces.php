<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PesPieces
 *
 * @ORM\Table(name="pes_pieces", indexes={@ORM\Index(name="IDlot", columns={"IDlot"}), @ORM\Index(name="IDfamille", columns={"IDfamille"}), @ORM\Index(name="IDfacture", columns={"IDfacture"})})
 * @ORM\Entity
 */
class PesPieces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDpiece", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpiece;

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
     * @var integer
     *
     * @ORM\Column(name="prelevement", type="integer", nullable=true)
     */
    private $prelevement;

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
     * @ORM\Column(name="prelevement_rum", type="text", length=65535, nullable=true)
     */
    private $prelevementRum;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_date_mandat", type="string", length=10, nullable=true)
     */
    private $prelevementDateMandat;

    /**
     * @var integer
     *
     * @ORM\Column(name="prelevement_IDmandat", type="integer", nullable=true)
     */
    private $prelevementIdmandat;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_sequence", type="string", length=100, nullable=true)
     */
    private $prelevementSequence;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_titulaire", type="text", length=65535, nullable=true)
     */
    private $prelevementTitulaire;

    /**
     * @var string
     *
     * @ORM\Column(name="prelevement_statut", type="string", length=100, nullable=true)
     */
    private $prelevementStatut;

    /**
     * @var integer
     *
     * @ORM\Column(name="titulaire_helios", type="integer", nullable=true)
     */
    private $titulaireHelios;

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
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

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
     * Get idpiece
     *
     * @return integer
     */
    public function getIdpiece()
    {
        return $this->idpiece;
    }

    /**
     * Set idlot
     *
     * @param integer $idlot
     *
     * @return PesPieces
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
     * @return PesPieces
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
     * Set prelevement
     *
     * @param integer $prelevement
     *
     * @return PesPieces
     */
    public function setPrelevement($prelevement)
    {
        $this->prelevement = $prelevement;

        return $this;
    }

    /**
     * Get prelevement
     *
     * @return integer
     */
    public function getPrelevement()
    {
        return $this->prelevement;
    }

    /**
     * Set prelevementIban
     *
     * @param string $prelevementIban
     *
     * @return PesPieces
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
     * @return PesPieces
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
     * Set prelevementRum
     *
     * @param string $prelevementRum
     *
     * @return PesPieces
     */
    public function setPrelevementRum($prelevementRum)
    {
        $this->prelevementRum = $prelevementRum;

        return $this;
    }

    /**
     * Get prelevementRum
     *
     * @return string
     */
    public function getPrelevementRum()
    {
        return $this->prelevementRum;
    }

    /**
     * Set prelevementDateMandat
     *
     * @param string $prelevementDateMandat
     *
     * @return PesPieces
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
     * Set prelevementIdmandat
     *
     * @param integer $prelevementIdmandat
     *
     * @return PesPieces
     */
    public function setPrelevementIdmandat($prelevementIdmandat)
    {
        $this->prelevementIdmandat = $prelevementIdmandat;

        return $this;
    }

    /**
     * Get prelevementIdmandat
     *
     * @return integer
     */
    public function getPrelevementIdmandat()
    {
        return $this->prelevementIdmandat;
    }

    /**
     * Set prelevementSequence
     *
     * @param string $prelevementSequence
     *
     * @return PesPieces
     */
    public function setPrelevementSequence($prelevementSequence)
    {
        $this->prelevementSequence = $prelevementSequence;

        return $this;
    }

    /**
     * Get prelevementSequence
     *
     * @return string
     */
    public function getPrelevementSequence()
    {
        return $this->prelevementSequence;
    }

    /**
     * Set prelevementTitulaire
     *
     * @param string $prelevementTitulaire
     *
     * @return PesPieces
     */
    public function setPrelevementTitulaire($prelevementTitulaire)
    {
        $this->prelevementTitulaire = $prelevementTitulaire;

        return $this;
    }

    /**
     * Get prelevementTitulaire
     *
     * @return string
     */
    public function getPrelevementTitulaire()
    {
        return $this->prelevementTitulaire;
    }

    /**
     * Set prelevementStatut
     *
     * @param string $prelevementStatut
     *
     * @return PesPieces
     */
    public function setPrelevementStatut($prelevementStatut)
    {
        $this->prelevementStatut = $prelevementStatut;

        return $this;
    }

    /**
     * Get prelevementStatut
     *
     * @return string
     */
    public function getPrelevementStatut()
    {
        return $this->prelevementStatut;
    }

    /**
     * Set titulaireHelios
     *
     * @param integer $titulaireHelios
     *
     * @return PesPieces
     */
    public function setTitulaireHelios($titulaireHelios)
    {
        $this->titulaireHelios = $titulaireHelios;

        return $this;
    }

    /**
     * Get titulaireHelios
     *
     * @return integer
     */
    public function getTitulaireHelios()
    {
        return $this->titulaireHelios;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return PesPieces
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
     * @return PesPieces
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
     * Set numero
     *
     * @param integer $numero
     *
     * @return PesPieces
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return PesPieces
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
     * @return PesPieces
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
}
