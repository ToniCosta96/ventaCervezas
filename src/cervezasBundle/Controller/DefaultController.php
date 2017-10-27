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
        $cervezas = $repository->findAll();
        return $this->render('cervezasBundle:Default:cervezas.html.twig',array('cervezas'=>$cervezas));
    }

    /**
     * @Route("/listaCervezas/id/{id}", name="listaCervezasId")
     */
    public function listaCervezasIdAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(Cerveza::class);
        $cervezas = array('cervezas'=>$repository->find($id));
        return $this->render('cervezasBundle:Default:cervezas.html.twig',array('cervezas'=>$cervezas));
    }
}
