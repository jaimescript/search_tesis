<?php

namespace Tesis\BuscadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AjaxController extends Controller
{
    public function listarDisciplinasAction()
    {
        $request = $this->get('request');
        $codigoTesis = $request->request->get('codigoTesis');

        $repository = $this->getDoctrine()->getRepository("TesisBuscadorBundle:Disciplina");
        $Disciplinas = $repository->findAll();

        $tesis = $this->getDoctrine()
            ->getRepository('TesisBuscadorBundle:Documento')
            ->findOneBy(array('codigoTesis' => $codigoTesis));

        $DisciplinasHtml = "";

        foreach ($Disciplinas as $Disciplina)
        {
            if($Disciplina->getCodigo()==$tesis->getDisciplina())
            {
                $DisciplinasHtml .= "<option style='font-weight:bolder' value='".$Disciplina->getCodigo()."' selected>".$Disciplina->getDescripcion()."</option>";
            }
            else
            {
                $DisciplinasHtml .= "<option value='".$Disciplina->getCodigo()."'>".$Disciplina->getDescripcion()."</option>";
            }
        }
        $return = array("responseCode"=>200, "DisciplinasHtml" => $DisciplinasHtml);
        $return = json_encode($return);//json encode the array
        return new Response($return,200,array('Content-Type'=>'application/json'));//make sure it has the correct content type
    }
    public function listarFacultadesAction()
    {
        $request = $this->get('request');
        $codigoTesis = $request->request->get('codigoTesis');

        $repository = $this->getDoctrine()->getRepository("TesisBuscadorBundle:Facultad");
        $Facultades = $repository->findAll();

        $tesis = $this->getDoctrine()
            ->getRepository('TesisBuscadorBundle:Documento')
            ->findOneBy(array('codigoTesis' => $codigoTesis));

        $FacultadesHtml = "";

        foreach ($Facultades as $Facultad)
        {
            if($Facultad->getCodigo()==$tesis->getFacultad())
            {
                $FacultadesHtml .= "<option  style='font-weight:bolder' value='".$Facultad->getCodigo()."' selected>".$Facultad->getDescripcion()."</option>";
            }
            else
            {
                $FacultadesHtml .= "<option value='".$Facultad->getCodigo()."'>".$Facultad->getDescripcion()."</option>";
            }

        }
        $return = array("responseCode"=>200, "FacultadesHtml" => $FacultadesHtml);
        $return = json_encode($return);//json encode the array
        return new Response($return,200,array('Content-Type'=>'application/json'));
    }

    public function listarProgramasAction()
    {
        $request = $this->get('request');
        $codigoTesis = $request->request->get('codigoTesis');
        $IdFacultad = $request->request->get('IdFacultad');

        $Programas = $this->getDoctrine()
            ->getRepository("TesisBuscadorBundle:Programas")
            ->findBy(array('IdFacultad' => $IdFacultad));

        $tesis = $this->getDoctrine()
            ->getRepository('TesisBuscadorBundle:Documento')
            ->findOneBy(array('codigoTesis' => $codigoTesis));

        $ProgramasHtml = "";

        foreach ($Programas as $Programa)
        {
            $ProgramasHtml .= "<option value='".$Programa->getIdPrograma()."'>".$Programa->getProgProf()."</option>";
        }

        $return = array("responseCode"=>200, "ProgramasHtml" => $ProgramasHtml);
        $return = json_encode($return);//json encode the array
        return new Response($return,200,array('Content-Type'=>'application/json'));
    }
}