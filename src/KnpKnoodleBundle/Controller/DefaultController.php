<?php

namespace KnpKnoodleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KnpKnoodleBundle:Default:index.html.twig', array('name' => $name));
    }
}
