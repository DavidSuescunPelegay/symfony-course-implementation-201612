<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontendController extends Controller
{
    public function indexAction()
    {
        return $this->render('frontend/index.html.twig');
    }

    public function loginAction()
    {
            if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
                return $this->redirect($this->generateUrl('listar_productos'));
            }

            $authenticationUtils = $this->get('security.authentication_utils');
            $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render('frontend/login.html.twig',
                array(
                    'last_username' => $lastUsername,
                    'error'         => $error,
                )
            );
    }
}
