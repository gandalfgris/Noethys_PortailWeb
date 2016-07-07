<?php

namespace ConnecthysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionnaireQuestions
 *
 * @ORM\Table(name="questionnaire_questions", indexes={@ORM\Index(name="IDcategorie", columns={"IDcategorie"})})
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



    /**
     * Get idquestion
     *
     * @return integer
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * Set idcategorie
     *
     * @param integer $idcategorie
     *
     * @return QuestionnaireQuestions
     */
    public function setIdcategorie($idcategorie)
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    /**
     * Get idcategorie
     *
     * @return integer
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return QuestionnaireQuestions
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set visible
     *
     * @param integer $visible
     *
     * @return QuestionnaireQuestions
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return integer
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return QuestionnaireQuestions
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set controle
     *
     * @param string $controle
     *
     * @return QuestionnaireQuestions
     */
    public function setControle($controle)
    {
        $this->controle = $controle;

        return $this;
    }

    /**
     * Get controle
     *
     * @return string
     */
    public function getControle()
    {
        return $this->controle;
    }

    /**
     * Set defaut
     *
     * @param string $defaut
     *
     * @return QuestionnaireQuestions
     */
    public function setDefaut($defaut)
    {
        $this->defaut = $defaut;

        return $this;
    }

    /**
     * Get defaut
     *
     * @return string
     */
    public function getDefaut()
    {
        return $this->defaut;
    }

    /**
     * Set options
     *
     * @param string $options
     *
     * @return QuestionnaireQuestions
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return string
     */
    public function getOptions()
    {
        return $this->options;
    }
}
