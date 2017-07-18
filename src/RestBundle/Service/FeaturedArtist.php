<?php
namespace RestBundle\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use RestBundle\Entity\Featuredartists;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FeaturedArtist
{
    public function __construct(EntityManager $entityManager, ContainerInterface $container)
    {
        $this->default_em   = $entityManager;
        $this->container  = $container;
    }
    public function featuredArtistImgUrl($territory)
    {
        $featuredRepository = $this->default_em
            ->getRepository('RestBundle:FeaturedArtistsComposers');

        $fac = $featuredRepository->getFeaturedArtists($territory);
        foreach ($fac as $key => $value) {
            $imgPath = $this->container->getParameter('cdn_url');
            $featureImageURL =  $imgPath. 'featuredimg/' . $value['artistImage'];

            $featured[$key] = array(
                'artistName'   => $value['artistName'],
                'artistImage'  => $featureImageURL,
                'territory'    => $value['territory'],
                'album'        => $value['album'],
                'language'     => $value['language'],
                'providerType' => $value['providerType'],
                );

            if (!$featuredRepository->checkImageFileExist($featureImageURL)) {
                $brokenImages[] = date('Y-m-d H:i:s').':' .$value['territory']
                .' : '.'FeatureArtist : '. $value['artistName'];
                //unset the broken images variable in the array
                unset($featured);
            }
        }
        return $featured;
    }
}
