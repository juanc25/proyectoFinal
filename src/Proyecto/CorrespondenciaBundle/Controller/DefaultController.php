<?php

namespace Proyecto\CorrespondenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CorrespondenciaBundle:Default:index.html.twig', array('name' => $name));
    }
}
