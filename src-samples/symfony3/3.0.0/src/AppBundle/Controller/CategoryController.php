<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller {

    public function listAction() {
        return $this->render('category/list.html.twig');
    }

    public function createAction() {
        return $this->render('category/create.html.twig');
    }

    public function deleteAction() {
        //Aqui no hay vista, solo eliminamos el usuario
        //return $this->render('category/list.html.twig');
    }

    public function updateAction($id) {
        //Comprobar que existe el usuario
        return $this->render('category/update.html.twig', array('id' => $id, 'name' => "Lorem"));
    }

}
