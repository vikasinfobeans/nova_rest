<?php

namespace RestBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class RestApiController extends FOSRestController
{
    /**
     * @Route("/api")
     */
    public function indexAction()
    {
        $data = array("hello" => "world");
        $view = $this->view($data);
        return $this->handleView($view);
    }

    /**
     * @Route("/getTopSingles/{territory}")
     */
    public function topSinglesAction($territory)
    {  
        $em = $this->getDoctrine()->getManager();
        $topSingles = $em->getRepository('RestBundle:TopSingles')
            ->getTopSingles($territory);
        print_r($topSingles);  die;
        $view = $this->view($topSingles);
        return $this->handleView($view);                                            
    }
}