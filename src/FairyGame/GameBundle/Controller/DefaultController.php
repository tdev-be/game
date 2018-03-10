<?php

namespace FairyGame\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function homeAction()
    {
        return $this->render('@FairyGameGame/Default/index.html.twig',array('user'=>"test"));

    }

    public function indexAction()
    {
        return $this->redirect($this->generateUrl("fg_homepage"));

    }
}
