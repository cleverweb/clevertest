<?php

namespace Cleverweb\CommonBundle\Controller;

use Cleverweb\CommonBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;


class CategoryController extends Controller
{
    /**
     * @Route("/categories/create", name="cleverweb_commmon_categories_create")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $category = new Category();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder($category)
            ->add('name')
            ->add('add', 'submit')
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em->persist($category);
            $em->flush();

            return $this->redirect($this->generateUrl('cleverweb_common_quiz_create'));
        }

        return array('form' => $form->createView());
    }
}
