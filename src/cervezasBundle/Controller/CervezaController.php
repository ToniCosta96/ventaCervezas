<?php

namespace cervezasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Validator\Constraints\Date;
use cervezasBundle\Entity\Cerveza;

class CervezaController extends Controller
{
    /**
     * @Route("/crearCerveza/nombre={nombre}&pais={pais}&poblacion={poblacion}", name="crearCerveza")
     */
    public function crearCervezaAction($nombre, $pais, $poblacion)
    {
        //Nuevo objeto de tipo Cerveza
        $cerveza = new Cerveza();
        $cerveza->setNombre($nombre);
        $cerveza->setPais($pais);
        $cerveza->setPoblacion($poblacion);
        $cerveza->setTipo("TipoCervezaCreada");
        $cerveza->setImportacion(true);
        $cerveza->setTamanyo(50);
        $cerveza->setFechaAlmacen(\DateTime::createFromFormat("d/m/Y","25/04/2015"));
        $cerveza->setCantidad(50);
        $cerveza->setFoto("http://blog.escuelacervecera.com/wp-content/uploads/2017/09/por-que-las-botellas-de-cerveza-siempre-son-marrones-o-verdes.jpg");

        //Doctrine
        $em = $this->getDoctrine()->getManager();
        $em->persist($cerveza);
        $em->flush();

        //return $this->render('cervezasBundle:Cerveza:crearCerveza.html.twig',array('cervezaId'=>$cerveza->getId()));
        return $this->redirectToRoute('listaCervezasId', array('id'=>$cerveza->getId()));
    }
}
