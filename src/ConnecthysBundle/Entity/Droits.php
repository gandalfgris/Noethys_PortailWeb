<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droits
 *
 * @ORM\Table(name="droits")
 * @ORM\Entity
 */
class Droits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDdroit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddroit;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDmodele", type="integer", nullable=true)
     */
    private $idmodele;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=200, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=200, nullable=true)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="text", length=65535, nullable=true)
     */
    private $etat;



    /**
     * Get iddroit
     *
     * @return integer
     */
    public function getIddroit()
    {
        return $this->iddroit;
    }

    /**
     * Set idutilisateur
     *
     * @param integer $idutilisateur
     *
     * @return Droits
     */
    public function setIdutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return integer
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Set idmodele
     *
     * @param integer $idmodele
     *
     * @return Droits
     */
    public function setIdmodele($idmodele)
    {
        $this->idmodele = $idmodele;

        return $this;
    }

    /**
     * Get idmodele
     *
     * @return integer
     */
    public function getIdmodele()
    {
        return $this->idmodele;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Droits
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return Droits
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
     * Set etat
     *
     * @param string $etat
     *
     * @return Droits
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
