<?php

namespace wcs\CoavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('wcsCoavBundle:Default:index.html.twig');
    }
}
