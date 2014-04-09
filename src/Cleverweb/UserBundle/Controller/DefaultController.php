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

    public function indexAction($id)
    {
        /**
         * @var User $user
         */
        $user = $this->getDoctrine()
            ->getRepository('UserBundle:User')
            ->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id '.$id
            );
        }

        return $this->render('UserBundle:Default:index.html.twig', array('user' => $user));
    }
}
