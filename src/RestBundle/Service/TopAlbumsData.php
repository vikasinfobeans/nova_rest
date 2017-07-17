<?php

namespace RestBundle\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use RestBundle\Entity\TopAlbums;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

class TopAlbumsData
{

    /** @var EntityManager */
    protected $entityManager;

    /**
     * TopAlbumsData constructor.
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
    * TopAlbums Get Data
    */
    public function getTopAlbumsData($territory)
    {
        $topAlbumData = array();
        $topAlbumsManager = $this->em->getRepository('RestBundle:TopAlbums');
        $topAlbumsList = $topAlbumsManager->getTopAlbumsList($territory);


        if ((count($topAlbumsList) < 1) || ($topAlbumsList === false)) {
            $this->log('a list of top albums was not available for ' . $territory);
            $topAlbumData = array( '204' => 'No Content Found' );
        } else {
            /*creating a list of the album ids and provider types.*/
            $idsProviderType = $topAlbumsManager->getIdsProviderType($topAlbumsList);
            // Gets the album info for each album on the list
            if ($idsProviderType != '') {
                $albumManager = $this->em->getRepository('RestBundle:Albums');
                $topAlbumData = $albumManager->getTopAlbumData($territory, $idsProviderType);
            } else {
                $topAlbumData = array( '204' => 'No Content Found' );
            }

            if (!empty($topAlbumData)) {
                $img = $this->container->getParameter('cdn_img_path');
                foreach ($topAlbumData as $key => $data) {
                    $topAlbumData[$key]['topAlbumImage'] = $img . $topAlbumsManager
                    ->artworkToken($data['cdnpath'].'/'.$data['imageSaveasname']);

                    $providerType = $data['providerType'];
                    $topAlbumData[$key]['albumSongs'] = $topAlbumsManager
                        ->getAlbumSongsNew($data['prodid'], $providerType, $territory);
                }
            } else {
                $topAlbumData = array( '204' => 'No Content Found' );
            }
        }

        return $topAlbumData;
    }
}
