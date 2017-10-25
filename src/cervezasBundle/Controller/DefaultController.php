<?php

namespace cervezasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use cervezasBundle\Entity\Cerveza;

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
        $repository = $this->getDoctrine()->getRepository(Cerveza::class);
        $cerveza = $repository->find(1);
        return $this->render('cervezasBundle:Default:cervezas.html.twig',array('cerveza'=>$cerveza));
    }
}
