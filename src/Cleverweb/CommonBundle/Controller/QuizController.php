<?php

namespace Cleverweb\CommonBundle\Controller;

use Cleverweb\CommonBundle\Entity\Quiz;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class QuizController extends Controller
{
    /**
     * @Route("/quizzes/new", name="cleverweb_common_quiz_create")
     * @Template()
     */
    public function createQuizAction()
    {
        $quiz = new Quiz();

        $form = $this->createFormBuilder($quiz)
            ->add('name', 'text')
            ->add('category')
            ->getForm();


        return array(
            'form' => $form->createView()
        );
    }
}
