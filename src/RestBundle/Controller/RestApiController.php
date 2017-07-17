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
        $topAlbumRepository = $this->getDoctrine()
            ->getRepository('RestBundle:TopAlbums');
        $allTerritory = $topAlbumRepository->getAllTerritory();
        if (empty($territory) || !in_array($territory, $allTerritory)) {
            $territory = 'us';
        }
        $topAlbumData = array();
        $topAlbumsList = $topAlbumRepository->getTopAlbumsList($territory);
        if ((count($topAlbumsList) < 1) || ($topAlbumsList === false)) {
            $this->log('a list of top albums was not available for ' . $territory);
            $topAlbumData = array( '204' => 'No Content Found' );
        } else {
            /*creating a list of the album ids and provider types.*/
            $idsProviderType = $topAlbumRepository->getProviderType($topAlbumsList);
            // Gets the album info for each album on the list
            if ($idsProviderType != '') {
                $albumRepository = $this->getDoctrine()
                    ->getRepository('RestBundle:Albums');
                $topAlbumData = $albumRepository
                    ->getTopAlbumData($territory, $idsProviderType);
            } else {
                $topAlbumData = array( '204' => 'No Content Found' );
            }

            if (!empty($topAlbumData)) {
                $img = $this->container->getParameter('cdn_img_path');
                foreach ($topAlbumData as $key => $data) {
                    $topAlbumData[$key]['topAlbumImage'] = $img . $topAlbumRepository
                    ->artworkToken($data['cdnpath'].'/'.$data['imageSaveasname']);

                    $providerType = $data['providerType'];
                    $topAlbumData[$key]['albumSongs'] = $topAlbumRepository
                        ->getAlbumSongsNew($data['prodid'], $providerType, $territory);
                }
            } else {
                $topAlbumData = array( '204' => 'No Content Found' );
            }
        }

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

        $allTerritory = $topAlbumRepository->getAllTerritory();

        if (empty($territory) || !in_array($territory, $allTerritory)) {
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
