<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categoria;
use AppBundle\Form\CategoriaRegistroType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoriaController extends Controller
{
    public function indexAction()
    {
        $categorias = $this->getDoctrine()->getRepository('AppBundle:Categoria')->findAll();

        return $this->render('categoria/index.html.twig',
            array('categorias' => $categorias)
        );
    }

    public function crearAction(Request $request)
    {
        $categoria = new Categoria();
        $form = $this->createForm(CategoriaRegistroType::class, $categoria);

        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                //Compruebo si no existe ya una categoria con el mismo nombre creada
                $numerocategorias = $em->getRepository('AppBundle:Categoria')->findOneBy(array("nombre" => $form->get("nombre")->getData()));

                if (count($numerocategorias) == 0) {
                    $categoria->setNombre($form->get("nombre")->getData());
                    $categoria->setActivo(1);
                    $em->persist($categoria);
                    $em->flush();

                    $this->get('session')->getFlashBag()->set('success', 'Categoría creada correctamente');
                } else {
                    $this->get('session')->getFlashBag()->set('success', 'Ya existe una categoría con ese nombre');
                }
            }
        }

        return $this->render('categoria/crear.html.twig', array(
            'form' => $form->createView(),
        ));


    }

    public function modificarAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        return $this->render('categoria/modificar.html.twig');
    }

    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $categoria = $em->getRepository('AppBundle:Categoria')->find($id);

        //Comprobacion de que existe
        if (!$categoria OR $categoria->getActivo() == 0) {
            throw $this->createNotFoundException(
                'No existe categoria con el identificador ' . $id
            );
        }

        $categoria->setActivo(0);
        $em->persist($categoria);
        $em->flush();

        return $this->redirect($this->generateUrl('listar_categorias'));
    }
}
