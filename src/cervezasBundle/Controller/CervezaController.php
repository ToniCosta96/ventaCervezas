<?php

namespace cervezasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use cervezasBundle\Entity\Cerveza;
use cervezasBundle\Form\CervezaType;

class CervezaController extends Controller
{
    /**
     * @Route("/crearCervezaURL/nombre={nombre}&pais={pais}&poblacion={poblacion}", name="crearCervezaAPI")
     */
    public function crearCervezaURLAction($nombre, $pais, $poblacion)
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

    /**
     * @Route("/crearCerveza", name="crear_cerveza")
     */
    public function crearCervezaAction(Request $request)
    {
        $cervaza = new Cerveza();

        $form = $this->createForm(CervezaType::class, $cervaza);
        //$form->add('save', SubmitType::class, array('label' => 'Crear cerveza'));

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
          // $form->getData() holds the submitted values
          // but, the original `$cervaza` variable has also been updated
          $cervaza = $form->getData();

          // ... perform some action, such as saving the task to the database
          // for example, if Task is a Doctrine entity, save it!
          $em = $this->getDoctrine()->getManager();
          $em->persist($cervaza);
          $em->flush();

          return $this->redirectToRoute('lista_cervezas');
        }
        return $this->render('cervezasBundle:Cerveza:crearCerveza.html.twig',array('form' => $form->createView()));
    }

    /**
     * @Route("/modificarCerveza/{id}", name="modificar_cerveza")
     */
    public function modificarCervezaAction(Request $request, $id)
    {
        /*$em = $this->getDoctrine()->getManager();
        $cerveza = $em->getRepository(Cerveza::class)->find($id);

        if (!$cerveza) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $cerveza->setNombre($nombre);
        $cerveza->setPais($pais);
        $cerveza->setPoblacion($poblacion);
        $cerveza->setTipo("TipoCervezaCreada");
        $cerveza->setImportacion(true);
        $cerveza->setTamanyo(50);
        $cerveza->setFechaAlmacen(\DateTime::createFromFormat("d/m/Y","25/04/2015"));
        $cerveza->setCantidad(50);
        $cerveza->setFoto("http://blog.escuelacervecera.com/wp-content/uploads/2017/09/por-que-las-botellas-de-cerveza-siempre-son-marrones-o-verdes.jpg");

        $em->flush();

        return $this->redirectToRoute('lista_cervezas');*/

        //
        $em = $this->getDoctrine()->getManager();
        $cerveza = $em->getRepository(Cerveza::class)->find($id);

        if (!$cerveza) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $form = $this->createForm(CervezaType::class, $cerveza);
        //$form->add('save', SubmitType::class, array('label' => 'Crear cerveza'));

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
          // $form->getData() holds the submitted values
          // but, the original `$cerveza` variable has also been updated
          $cerveza = $form->getData();

          // ... perform some action, such as saving the task to the database
          // for example, if Task is a Doctrine entity, save it!
          $em = $this->getDoctrine()->getManager();
          $em->persist($cerveza);
          $em->flush();

          return $this->redirectToRoute('lista_cervezas');
        }
        return $this->render('cervezasBundle:Cerveza:crearCerveza.html.twig',array('form' => $form->createView()));
    }
}
