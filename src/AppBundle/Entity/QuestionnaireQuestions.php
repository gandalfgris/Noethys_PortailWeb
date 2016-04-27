<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionnaireQuestions
 *
 * @ORM\Table(name="questionnaire_questions")
 * @ORM\Entity
 */
class QuestionnaireQuestions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDquestion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDcategorie", type="integer", nullable=true)
     */
    private $idcategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;

    /**
     * @var integer
     *
     * @ORM\Column(name="visible", type="integer", nullable=true)
     */
    private $visible;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="text", length=65535, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="controle", type="string", length=200, nullable=true)
     */
    private $controle;

    /**
     * @var string
     *
     * @ORM\Column(name="defaut", type="text", length=65535, nullable=true)
     */
    private $defaut;

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="text", length=65535, nullable=true)
     */
    private $options;


}

