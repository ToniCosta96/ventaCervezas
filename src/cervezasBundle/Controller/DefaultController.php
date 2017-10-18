<?php

namespace cervezasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('cervezasBundle:Default:index.html.twig');
    }

    /**
     * @Route("/listaCervezas", name="listaCervezas")
     */
    public function listaCervezasAction()
    {
        return $this->render('cervezasBundle:Default:cervezas.html.twig');
    }
}
