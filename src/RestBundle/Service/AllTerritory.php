<?php

namespace RestBundle\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use RestBundle\Entity\Territories;
use Doctrine\ORM\EntityManager;

class AllTerritory
{


    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }
    public function getAllTerritoyName()
    {
        $topAlbumRepository = $this->em->getRepository('RestBundle:Territories');
        return $topAlbumRepository->getAllTerritory();
    }
}
