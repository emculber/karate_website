<?php

namespace KarateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/classes", name="classes")
     */
    public function indexAction()
    {
        return $this->render('KarateBundle:Default:index.html.twig');
    }
}
