<?php

namespace Cleverweb\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Cleverweb\UserBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/user/{id}", name="cleverweb_user_default_index")
     */

    public function indexAction($name)
    {
        /**
         * @var User $user
         */
        return $this->render('UserBundle:Default:index.html.twig', array($user->getUsername('id') => $name));
    }
}
