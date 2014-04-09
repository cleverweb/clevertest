<?php

namespace Cleverweb\CommonBundle\Entity;

use Cleverweb\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * QuizActivity
 *
 * @ORM\Table(name="quiz_activity")
 * @ORM\Entity
 */
class QuizActivity
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
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime", nullable=false)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime", nullable=true)
     */
    private $end;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="Cleverweb\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fos_user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quiz_id", referencedColumnName="id")
     * })
     */
    private $quiz;



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
     * Set start
     *
     * @param \DateTime $start
     * @return QuizActivity
     */
    public function setStart($start)
    {
        $this->start = $start;
    
        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime 
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     * @return QuizActivity
     */
    public function setEnd($end)
    {
        $this->end = $end;
    
        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime 
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set fosUser
     *
     * @param User $user
     * @return QuizActivity
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get fosUser
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set test
     *
     * @param Quiz $quiz
     * @return QuizActivity
     */
    public function setTest(Quiz $quiz = null)
    {
        $this->quiz = $quiz;
    
        return $this;
    }

    /**
     * Get test
     *
     * @return Quiz
     */
    public function getQuiz()
    {
        return $this->quiz;
    }
}