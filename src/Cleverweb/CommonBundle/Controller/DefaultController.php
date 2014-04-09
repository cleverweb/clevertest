<?php

namespace Cleverweb\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}", name="common_hello_somebody")
     * @Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/email/{text}", name="common_email_somebody")
     * @Template()
     */
    public function emailAction($text)
    {
        $mailer = $this->get('mailer');

        $message = new \Swift_Message('Hello', $text);
        $message->setTo('armadelf@gmail.com');
        $message->setFrom('me@me.me');

        $mailer->send($message);
    }

    /**
     * @Route("/", name="common_homepage")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
