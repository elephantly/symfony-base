<?php

namespace Elphtly\KahlanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KahlanBundle:Default:index.html.twig', array('name' => $name));
    }
}
