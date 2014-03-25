<?php

namespace Cleverweb\CommonBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
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
     * @ORM\Column(name="name", type="string", length=225, nullable=false)
     */
    private $name;


    /**
     * @var Quiz[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Quiz", mappedBy="category")
     */
    protected $quizes;

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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quizes = new ArrayCollection();
    }
    
    /**
     * Add quizes
     *
     * @param Quiz $quizes
     * @return Category
     */
    public function addQuiz(Quiz $quiz)
    {
        $this->quizes[] = $quiz;
    
        return $this;
    }

    /**
     * Remove quizes
     *
     * @param Quiz $quizes
     */
    public function removeQuiz(Quiz $quiz)
    {
        $this->quizes->removeElement($quiz);
    }

    /**
     * Get quizes
     *
     * @return Quiz[]
     */
    public function getQuizes()
    {
        return $this->quizes;
    }
}