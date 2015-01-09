<?php

namespace Z\XmlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZXmlBundle:Default:index.html.twig', array('name' => $name));
    }
}
