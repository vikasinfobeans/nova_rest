<?php

namespace RestBundle\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use RestBundle\Entity\TopSingles;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class TopSinglesData
{
    /** @var EntityManager */
    protected $entityManager;

    /**
     * TopSinglesData constructor.
     *
     * @param EntityManager $entityManager
     * @param bool          $requireImagesToPromoteCar
     */
    public function __construct(EntityManager $entityManager,ContainerInterface $container)
    {
        $this->em = $entityManager;
        $this->container = $container;
    }


    /**
    * TopSingles Get Data
    */
    public function getTopSingles($territory)
    { 
        $cache = new FilesystemAdapter();
        $topSinglesInstance = $cache->getItem('Nova.TopSingles_'.$territory);

        if (!$topSinglesInstance->isHit()) {
            $topSinglesManager = $this->em->getRepository('RestBundle:TopSingles');
            $topSingles = $topSinglesManager->getTopSingles($territory);
            $topSinglesInstance->set($topSingles);
            $cache->save($topSinglesInstance);
        } else {
             
            $topSingles = $topSinglesInstance->get();
        }

        return $topSingles;
    }
}
