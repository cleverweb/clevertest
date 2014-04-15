<?php

namespace Cleverweb\CommonBundle\Controller;

use Cleverweb\CommonBundle\Entity\Quiz;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class QuizController extends Controller
{
    /**
     * @Route("/quizzes/new", name="cleverweb_common_quiz_create")
     * @Template()
     */
    public function createQuizAction(Request $request)
    {
        $quiz = new Quiz();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder($quiz)
            ->add('name', 'text')
            ->add('category')
            ->add('add quiz', 'submit')
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em->persist($quiz);
            $em->flush();

            return $this->redirect($this->generateUrl('cleverweb_common_quiz_create'));
        }

        return array(
            'form' => $form->createView()
        );
    }
}
