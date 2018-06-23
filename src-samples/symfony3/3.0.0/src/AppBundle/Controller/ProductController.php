<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller {

    public function listAction() {
        return $this->render('product/list.html.twig');
    }

    public function createAction() {
        return $this->render('product/create.html.twig');
    }

    public function deleteAction() {
        //Aqui no hay vista, solo eliminamos el usuario
        //return $this->render('product/list.html.twig');
    }

    public function updateAction($id) {
        //Comprobar que existe el usuario
        return $this->render('product/update.html.twig', array('id' => $id, 'name' => "Lorem"));
    }

}
