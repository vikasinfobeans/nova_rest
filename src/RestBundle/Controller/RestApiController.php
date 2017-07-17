<?php
 /**
  * Src/RestBundle/Controller/RestApiController.php
  * PHP Version 7.1
  *
  * @category Class
  * @package  RestApiController
  * @author   Vikas kale <vikas.kale12@gmail.com>
  * @license  http://www.freegalmusic.com GNU General Public License
  * @link     http://www.freegalmusic.com/
  */
namespace RestBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

 /**
  * MyClass Class Doc Comment
  *
  * @category Class
  * @package  RestApiController
  * @author   Vikas kale <vikas.kale@infobeans.com>
  * @license  http://www.freegalmusic.com GNU General Public License
  * @link     http://www.freegalmusic.com/
  */
class RestApiController extends FOSRestController
{
    /**
     * This function is used to getTopAlbums.
     *
     * @param string $territory to load territory wise Song
     *                          for access territory wise top albums
     *
     * @Route("/top-albums/{territory}", name="get_top_albums")
     * @return                           json of top albums
     */
    public function getTopAlbumsAction($territory)
    {
        /*Check if Territory Name is Empty or Not Mactch*/

        $allTerritory = $this->get('rest.allTerritory');
        $allTerritoryData = $allTerritory->getAllTerritoyName();

        if (empty($territory) || !in_array(strtoupper($territory), $allTerritoryData)) {
            $territory = 'us';
        }

        $albumsService = $this->get('rest.topAlbums');
        $topAlbumData = $albumsService->getTopAlbumsData($territory);

        $response = new Response(json_encode($topAlbumData));

        return $response;
    }

    /**
     * This function is used to get Top Singles of Territory.
     *
     * @param string $territory for api
     *                          for access territory wise top Singles
     *
     * @Route("/top-singles/{territory}")
     * @return                            array the arry
     */
    public function topSinglesAction($territory)
    {
        /*Check if Territory Name is Empty or Not Mactch*/
        $topAlbumRepository = $this->getDoctrine()
            ->getRepository('RestBundle:TopAlbums');

        $allTerritory = $this->get('rest.allTerritory');
        $allTerritoryData = $allTerritory->getAllTerritoyName();

        if (empty($territory) || !in_array(strtoupper($territory), $allTerritoryData)) {
            $territory = 'US';
        }

        $cache = new FilesystemAdapter();

        $topSinglesInstance = $cache->getItem('Nova.TopSingles_'.$territory);

        if (!$topSinglesInstance->isHit()) {
            $em = $this->getDoctrine()->getManager();
            $topSingles = $em->getRepository('RestBundle:TopSingles')
                ->getTopSingles($territory);

            $topSinglesInstance->set($topSingles);
            $cache->save($topSinglesInstance);
        } else {
            $topSingles = $topSinglesInstance->get();
        }

        $response = new Response(json_encode($topSingles));

        return $response;
    }

    /**
     * This function is used to get Top Singles of Territory.
     *
     * @param string $territory for api
     *                          for access territory wise featuredArtis
     *
     * @Route("/featured-artist/{territory}")
     * @return                                return Json of featuredArtis
     */
    public function featuredArtistAction($territory)
    {
        global $brokenImages;
        //$cache = new FilesystemAdapter();
        //$featuredArtistInstance = $cache->getItem('Nova.FeaturedArtist_'.$territory);
        //if (!$featuredArtistInstance->isHit()) {
        
            $featured = $this->get('rest.featuredArtist');
            //$em = $fa->getDoctrine()->getEntityManager();
           $result =  $featured->featuredArtistImgUrl($territory);

            //$featuredArtistInstance->set($featured);
           // $cache->save($featuredArtistInstance);
       // } else {
       //     $featured = $featuredArtistInstance->get();
       // }
        $response = new Response(json_encode($result));

        return $response;
    }
}
