<?php


namespace Cleverweb\CommonBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TestController extends Controller {

    /**
     * @Route("/test/new", name="common_test_new")
     * @Template()
     */
    public function createNewTestAction()
    {

        return array();
    }
} 