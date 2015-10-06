<?php

namespace Annuaire\BienEtreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AnnuaireBienEtreBundle:Default:index.html.twig', array('name' => $name));
    }
}
