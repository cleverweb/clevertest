<?php

namespace Cleverweb\CommonBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * UserAnswer
 *
 * @ORM\Table(name="user_answer")
 * @ORM\Entity
 */
class UserAnswer
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
     * @var AnswerVariation[]
     *
     * @ORM\ManyToMany(targetEntity="AnswerVariation", mappedBy="userAnswers")
     */
    private $answerVariations;

    /**
     * @var QuizActivity
     *
     * @ORM\ManyToOne(targetEntity="QuizActivity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quiz_activity_id", referencedColumnName="id")
     * })
     */
    private $quizActivity;

    /**
     * @var Question
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
        $this->answerVariations = new ArrayCollection();
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
     * Add answerVariation
     *
     * @param AnswerVariation $answerVariation
     * @return UserAnswer
     */
    public function addAnswerVariation(AnswerVariation $answerVariation)
    {
        $this->answerVariations[] = $answerVariation;
    
        return $this;
    }

    /**
     * Remove answerVariation
     *
     * @param AnswerVariation $answerVariation
     */
    public function removeAnswerVariation(AnswerVariation $answerVariation)
    {
        $this->answerVariations->removeElement($answerVariation);
    }

    /**
     * Get answerVariation
     *
     * @return AnswerVariation[]
     */
    public function getAnswerVariations()
    {
        return $this->answerVariations;
    }

    /**
     * Set quizActivity
     *
     * @param QuizActivity $quizActivity
     * @return UserAnswer
     */
    public function setQuizActivity(QuizActivity $quizActivity = null)
    {
        $this->quizActivity = $quizActivity;
    
        return $this;
    }

    /**
     * Get quizActivity
     *
     * @return QuizActivity
     */
    public function getQuizActivity()
    {
        return $this->quizActivity;
    }

    /**
     * Set question
     *
     * @param Question $question
     * @return UserAnswer
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