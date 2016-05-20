<?php

namespace Ens\BenjaminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EnsBenjaminBundle:Default:index.html.twig');
    }
}
