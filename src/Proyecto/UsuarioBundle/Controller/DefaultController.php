<?php

namespace Proyecto\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
   public function portadaAction()
    {
    }
    
    public function indexAction($name)
    {
        return $this->render('UsuarioBundle:Default:index.html.twig', array('name' => $name));
        
        $em = $this->getDoctrine()->getEntityManager();
    }
}
