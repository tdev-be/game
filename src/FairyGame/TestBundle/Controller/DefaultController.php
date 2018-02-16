<?php

namespace FairyGame\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/test/{user}")
     */
    public function indexAction($user)
    {
        return $this->render('@FairyGameTest/Default/index.html.twig',array('user'=>$user));

    }
}
