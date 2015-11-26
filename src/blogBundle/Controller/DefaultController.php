<?php

namespace blogBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
    public function indexAction($name)
    {
        return $this->render('blogBundle:Default:index.html.twig', array('name' => $name));
    }
}
