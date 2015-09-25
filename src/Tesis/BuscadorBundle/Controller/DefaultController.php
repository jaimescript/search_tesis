<?php

namespace Tesis\BuscadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Tesis\BuscadorBundle\Entity\Documento;
use Tesis\BuscadorBundle\Form\Editar\EditarTesis;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TesisBuscadorBundle:Default:index.html.twig', array('name' => $name));
    }
    public function inicioAction()
    {
        return $this->render('TesisBuscadorBundle:Default:inicio.html.twig');
    }
    public function panelAction()
    {
        $url = $this->generateUrl('tesis_buscador_table');
        return $this->render('TesisBuscadorBundle:Default:panel.html.twig', array('url' => $url));
    }
    public function listaAction()
    {
        return $this->render('TesisBuscadorBundle:Default:lista.html.twig');
    }

    public function editarAction($codigoTesis)
    {
        $tesis = $this->getDoctrine()
            ->getRepository('TesisBuscadorBundle:Documento')
            ->findOneBy(array('codigoTesis' => $codigoTesis));

        if (!$tesis) {
            throw $this->createNotFoundException('No existe la tesis con el codigo:'.$codigoTesis.'!');
        }
        $formulario = $this->createForm(new EditarTesis(),$tesis, array(
            'action' => $this->generateUrl('tesis_buscador_editar_guardar')
        ));


        return $this->render('TesisBuscadorBundle:Default:FormularioEditarTesis.html.twig',
            array('tesis' => $tesis, 'form' => $formulario->createView()));


        /*
        return $this->render('TesisBuscadorBundle:Default:EditarTesis.html.twig',
            array('tesis' => $tesis));
        */
    }

    public function editarGuardarTesisaction(Request $request)
    {
        $peticion = $request->request->get('tesis');
        $codigoTesis = $peticion['codigoTesis'];

        $em = $this->getDoctrine()->getManager();
        $tesis = $em->getRepository('TesisBuscadorBundle:Documento')->findOneBy(array('codigoTesis' => $codigoTesis));
        if (!$tesis) {
            throw $this->createNotFoundException('La Tesis con el codigo:'.$codigoTesis.' no existe');
        }

        $formulario = $this->createForm(new EditarTesis(), $tesis);

        $formulario->handleRequest($request);
        if ($formulario->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tesis);
            $em->flush();
            return $this->redirect($this->generateUrl('tesis_buscador_editar',array('codigoTesis' => $codigoTesis)), 301);
        }
        return $this->redirect($this->generateUrl('tesis_buscador_editar',array('codigoTesis' => $codigoTesis)), 301);
    }



    /*
    public  function editarGuardarTesisaction()
    {
        $request = $this->get('request');
        $codigoTesis = $request->request->get('codigoTesis');
        $autor = $request->request->get('autor');
        $ubicacion = $request->request->get('ubicacion');
        $titulo = $request->request->get('titulo');
        $palabrasClave = $request->request->get('palabrasClave');
        $fechaAceptacion = $request->request->get('fechaAceptacion');
        $pubicacion = $request->request->get('ubicacion');
        $disciplina = $request->request->get('disciplinas');
        $facultades = $request->request->get('facultades');
        $programas = $request->request->get('programas');
        $grado = $request->request->get('grado');
        $universidad = $request->request->get('universidad');
        $copyright = $request->request->get('copyright');
        $resumen = $request->request->get('post-editor');


        try
        {
            $em = $this->getDoctrine()->getManager();

            $Tesis = $em->getRepository('TesisBuscadorBundle:Documento')
                ->findOneBy(array('codigoTesis' => $codigoTesis));

            $Tesis->setAutor($autor);
            $Tesis->setTitulo($titulo);
            $Tesis->setPalabrasClave($palabrasClave);
            $Tesis->setFechaAceptacion($fechaAceptacion);
            $Tesis->setDisciplina($disciplina);
            $Tesis->setFacultad($facultades);
            $Tesis->setPrograma($programas);
            $Tesis->setUniversidad($universidad);
            $Tesis->setCopyright($copyright);
            $Tesis->setGrado($grado);
            $Tesis->setUbicacion($ubicacion);
            $Tesis->setResumen($resumen);

            $em->flush();
            return $this->redirect($this->generateUrl('tesis_buscador_editar',array('codigoTesis' => $codigoTesis)), 301);
        }
        catch(\Doctrine\ORM\ORMException $e)
        {
            $this->get('session')->getFlashBag()->add('error','error personalizado');
            $this->get('logger')->error($e->getMessage());
            return $this->redirect($this->get('request')->headers->get('referer'));
        }


    }
    */

}