<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */



        return $this->render('AcmeDemoBundle:Welcome:index.html.twig');
    }

    public function formAction()
    {
        $form = $this->createFormBuilder(null)
            ->add('fieldA', 'text')
            ->add('fieldB', 'text')
            ->getForm();

        return $this->render('AcmeDemoBundle:Welcome:form.html.twig', array('form'=>$form->createView()));
    }


}
