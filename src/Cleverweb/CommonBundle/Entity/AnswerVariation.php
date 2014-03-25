<?php

namespace Cleverweb\CommonBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * AnswerVariation
 *
 * @ORM\Table(name="answer_variation")
 * @ORM\Entity
 */
class AnswerVariation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", nullable=false)
     */
    private $points;

    /**
     * @var UserAnswer[]
     *
     * @ORM\ManyToMany(targetEntity="UserAnswer", inversedBy="answerVariations")
     * @ORM\JoinTable(name="answer_variation_has_user_answer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="answer_variation_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="user_answer_id", referencedColumnName="id")
     *   }
     * )
     */
    private $userAnswers;

    /**
     * @var \Question
     *
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     * })
     */
    private $question;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userAnswer = new ArrayCollection();
    }
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return AnswerVariation
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return AnswerVariation
     */
    public function setPoints($points)
    {
        $this->points = $points;
    
        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Add userAnswer
     *
     * @param UserAnswer $userAnswer
     * @return AnswerVariation
     */
    public function addUserAnswer(UserAnswer $userAnswer)
    {
        $this->userAnswers[] = $userAnswer;
    
        return $this;
    }

    /**
     * Remove userAnswer
     *
     * @param UserAnswer $userAnswer
     */
    public function removeUserAnswer(UserAnswer $userAnswer)
    {
        $this->userAnswers->removeElement($userAnswer);
    }

    /**
     * Get userAnswer
     *
     * @return UserAnswer
     */
    public function getUserAnswer()
    {
        return $this->userAnswers;
    }

    /**
     * Set question
     *
     * @param Question $question
     * @return AnswerVariation
     */
    public function setQuestion(Question $question = null)
    {
        $this->question = $question;
    
        return $this;
    }

    /**
     * Get question
     *
     * @return Question
     */
    public function getQuestion()
    {
        return $this->question;
    }
}