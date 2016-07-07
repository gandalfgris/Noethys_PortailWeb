<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BadgeageJournal
 *
 * @ORM\Table(name="badgeage_journal", indexes={@ORM\Index(name="IDindividu", columns={"IDindividu"})})
 * @ORM\Entity
 */
class BadgeageJournal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDaction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaction;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=50, nullable=true)
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="individu", type="text", length=65535, nullable=true)
     */
    private $individu;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="text", length=65535, nullable=true)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="resultat", type="text", length=65535, nullable=true)
     */
    private $resultat;

    /**
     * @var \Individus
     *
     * @ORM\ManyToOne(targetEntity="Individus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDindividu", referencedColumnName="IDindividu")
     * })
     */
    private $idindividu;



    /**
     * Get idaction
     *
     * @return integer
     */
    public function getIdaction()
    {
        return $this->idaction;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return BadgeageJournal
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param string $heure
     *
     * @return BadgeageJournal
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return string
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set individu
     *
     * @param string $individu
     *
     * @return BadgeageJournal
     */
    public function setIndividu($individu)
    {
        $this->individu = $individu;

        return $this;
    }

    /**
     * Get individu
     *
     * @return string
     */
    public function getIndividu()
    {
        return $this->individu;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return BadgeageJournal
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set resultat
     *
     * @param string $resultat
     *
     * @return BadgeageJournal
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return string
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set idindividu
     *
     * @param \ConnecthysBundle\Entity\Individus $idindividu
     *
     * @return BadgeageJournal
     */
    public function setIdindividu(\ConnecthysBundle\Entity\Individus $idindividu = null)
    {
        $this->idindividu = $idindividu;

        return $this;
    }

    /**
     * Get idindividu
     *
     * @return \ConnecthysBundle\Entity\Individus
     */
    public function getIdindividu()
    {
        return $this->idindividu;
    }
}
