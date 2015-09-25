<?php

namespace Tesis\BuscadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ServiceRoutingController extends Controller
{
    public function rutaAction()
    {
        $url = $this->generateUrl('tesis_buscador_editar',array('codigoTesis' => '9F.0152.DR' ));
        return new Response($url);
    }
}