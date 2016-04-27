<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionnaireFiltres
 *
 * @ORM\Table(name="questionnaire_filtres")
 * @ORM\Entity
 */
class QuestionnaireFiltres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDfiltre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfiltre;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDquestion", type="integer", nullable=true)
     */
    private $idquestion;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=100, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="choix", type="text", length=65535, nullable=true)
     */
    private $choix;

    /**
     * @var string
     *
     * @ORM\Column(name="criteres", type="text", length=65535, nullable=true)
     */
    private $criteres;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDtarif", type="integer", nullable=true)
     */
    private $idtarif;


}

