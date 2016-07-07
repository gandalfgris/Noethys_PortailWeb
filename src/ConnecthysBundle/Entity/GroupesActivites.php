<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupesActivites
 *
 * @ORM\Table(name="groupes_activites")
 * @ORM\Entity
 */
class GroupesActivites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDgroupe_activite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgroupeActivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtype_groupe_activite", type="integer", nullable=true)
     */
    private $idtypeGroupeActivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDactivite", type="integer", nullable=true)
     */
    private $idactivite;



    /**
     * Get idgroupeActivite
     *
     * @return integer
     */
    public function getIdgroupeActivite()
    {
        return $this->idgroupeActivite;
    }

    /**
     * Set idtypeGroupeActivite
     *
     * @param integer $idtypeGroupeActivite
     *
     * @return GroupesActivites
     */
    public function setIdtypeGroupeActivite($idtypeGroupeActivite)
    {
        $this->idtypeGroupeActivite = $idtypeGroupeActivite;

        return $this;
    }

    /**
     * Get idtypeGroupeActivite
     *
     * @return integer
     */
    public function getIdtypeGroupeActivite()
    {
        return $this->idtypeGroupeActivite;
    }

    /**
     * Set idactivite
     *
     * @param integer $idactivite
     *
     * @return GroupesActivites
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
}
