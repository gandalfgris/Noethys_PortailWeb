<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BadgeageArchives
 *
 * @ORM\Table(name="badgeage_archives")
 * @ORM\Entity
 */
class BadgeageArchives
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDarchive", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarchive;

    /**
     * @var string
     *
     * @ORM\Column(name="date_archivage", type="string", length=10, nullable=true)
     */
    private $dateArchivage;

    /**
     * @var string
     *
     * @ORM\Column(name="codebarres", type="string", length=200, nullable=true)
     */
    private $codebarres;

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
     * Get idarchive
     *
     * @return integer
     */
    public function getIdarchive()
    {
        return $this->idarchive;
    }

    /**
     * Set dateArchivage
     *
     * @param string $dateArchivage
     *
     * @return BadgeageArchives
     */
    public function setDateArchivage($dateArchivage)
    {
        $this->dateArchivage = $dateArchivage;

        return $this;
    }

    /**
     * Get dateArchivage
     *
     * @return string
     */
    public function getDateArchivage()
    {
        return $this->dateArchivage;
    }

    /**
     * Set codebarres
     *
     * @param string $codebarres
     *
     * @return BadgeageArchives
     */
    public function setCodebarres($codebarres)
    {
        $this->codebarres = $codebarres;

        return $this;
    }

    /**
     * Get codebarres
     *
     * @return string
     */
    public function getCodebarres()
    {
        return $this->codebarres;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return BadgeageArchives
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
     * @return BadgeageArchives
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
}
