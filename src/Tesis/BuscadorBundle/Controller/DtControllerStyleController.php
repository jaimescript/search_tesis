<?php
namespace Tesis\BuscadorBundle\Controller;

use Brown298\DataTablesBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Response;

class DtControllerStyleController extends AbstractController
{
    /**
     * @var array
     */
    protected $columns = array(
        'documento.codigo' => 'Codigo',
        'documento.titulo' => 'Titulo',
        'documento.autor' => 'autor',
        'documento.grado' => 'Grado',
        'documento.disciplina' => 'Disciplina',
        'documento.programa' => 'Programa',
        'documento.FechaAceptacion' => 'FechaAceptacion',
        'documento.eliminar' => 'Eliminar',
    );

    /**
     * getQueryBuilder
     *
     * @param Request $request
     *
     * @return null
     */
    public function getQueryBuilder(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $userRepository = $em->getRepository('TesisBuscadorBundle:Documento');
        $qb = $userRepository->createQueryBuilder('documento')->setMaxResults( '10' );
        //$qb = $userRepository->createQueryBuilder('documento');
        return $qb;
    }

    /**
     * dataAction
     *
     * @route("/ajax", name="controller_style_ajax")
     *
     * @param Request $request
     * @param null $dataFormatter
     *
     * @return JsonResponse
     */
    public function dataAction(Request $request, $dataFormatter = null)
    {
        $renderer = $this->get('templating');
        return parent::dataAction($request, function($data) use ($renderer)
        {
            $count   = 0;
            $results = array();
            $limite = 100;
            foreach ($data as $row)
            {
                //$url = $this->generateUrl('tesis_buscador_table');
                //$url = $this->get('router')->generate('tesis_buscador_table');

                $results[$count][] = "<a href='/search_tesis/web/app_dev.php/editar/".$row['codigoTesis']."'>".$row['codigoTesis']."</a>";
                /*****  recortando titulo largo ***/
                $tamano = strlen($row['titulo']);
                if($tamano > $limite)
                {
                    $row['titulo'] = substr($row['titulo'], 0, $limite);
                    $row['titulo'] .= '...';
                }
                /************** END ***************/
                $results[$count][] = $row['titulo'];
                $results[$count][] = $row['autor'];
                $results[$count][] = $row['grado'];
                $results[$count][] = $row['disciplina'];
                $results[$count][] = $row['programa'];
                $results[$count][] = $row['fechaAceptacion'];
                $results[$count][] = '<input name="chk_0" value="'.$row['codigoTesis'].'" type="checkbox">';

                $results[$count][] = $renderer->render('TesisBuscadorBundle:Default:nameFormatter.html.twig', array('name' => $row['codigo']));
                $count += 1;
            }
            return $results;
        });
    }

    /**
     * indexAction
     *
     * @route("", name="controller_style")
     * @Template()
     *
     * @return array
     */
    public function indexAction()
    {
        //$url = $this->generateUrl('tesis_buscador_table');
        $url = "<p></p>";
        return $this->render('TesisBuscadorBundle:Default:lista.html.twig', array('columns'=> $this->columns, 'url'=> $url));
    }
    public function generarRuta()
    {
        return $this->generateUrl('tesis_buscador_table');
    }
}