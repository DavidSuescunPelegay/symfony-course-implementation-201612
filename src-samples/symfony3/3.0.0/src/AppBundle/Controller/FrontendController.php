<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontendController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontend/index.html.twig');
    }
    
    public function listAction(Request $request){
        return $this->render('frontend/index.html.twig');
    }
    
    public function addAction(Request $request){
        return $this->render('frontend/index.html.twig');
    }
    
    public function updateAction(Request $request){
        return $this->render('frontend/index.html.twig');
    }
    
    public function deleteAction(Request $request){
        return $this->render('frontend/index.html.twig');
    }
}
