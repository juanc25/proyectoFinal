<?php

namespace Proyecto\AlarmaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AlarmaBundle:Default:index.html.twig', array('name' => $name));
    }
}
