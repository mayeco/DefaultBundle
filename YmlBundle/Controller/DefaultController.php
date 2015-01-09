<?php

namespace Z\YmlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZYmlBundle:Default:index.html.twig', array('name' => $name));
    }
}
