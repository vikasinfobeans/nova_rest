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
        $topAlbumsList = $topAlbumRepository->getTopAlbumsList($territory);
        if ((count($topAlbumsList) < 1) || ($topAlbumsList === false)) {
            $this->log('a list of top albums was not available for ' . $territory);
        } else {
            /*creating a list of the album ids and provider types.*/
            $idsProviderType = $topAlbumRepository->getProviderType($topAlbumsList);
            // Gets the album info for each album on the list
            $topAlbumData = array();
            if ($idsProviderType != '') {
                $albumRepository = $this->getDoctrine()
                    ->getRepository('RestBundle:Albums');
                $topAlbumData = $albumRepository
                    ->getTopAlbumData($territory, $idsProviderType);
            }
            if (!empty($topAlbumData)) {
                $imgPath = $this->container->getParameter('cdn_img_path');
                foreach ($topAlbumData as $key => $data) {
                    $topAlbumData[$key]['topAlbumImage'] = $imgPath . $topAlbumRepository
                    ->artworkToken($data['cdnpath'].'/'.$data['imageSaveasname']);
                    $pd = $data['providerType'];
                    $topAlbumData[$key]['albumSongs'] = $topAlbumRepository
                    ->getAlbumSongsNew($data['prodid'], $pd, $territory);
                }
            }
        }
        $response = new Response(json_encode($topAlbumData));
        $response->headers->set('Content-Type', 'application/json');
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
        if (empty($territory)) {
            $territory  = 'US';
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

        $view = $this->view($topSingles);
        return $this->handleView($view);
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
        $featuredRepository = $this->getDoctrine()
            ->getRepository('RestBundle:FeaturedArtistsComposers');
        $fac =$featuredRepository->getFeaturedArtists();
        foreach ($fac as $key => $value) {
            $featureImageURL= $this->container
                ->getParameter('cdn_url'). 'featuredimg/' . $value['artistImage'];
            $featured[$key] = array(
                'artistName'   => $value['artistName'],
                'artistImage'  => $featureImageURL,
                'territory'    => $value['territory'],
                'album'        => $value['album'],
                'language'     => $value['language'],
                'providerType' => $value['providerType'],
                );

            if (!$featuredRepository->checkImageFileExist($featureImageURL)) {
                $brokenImages[] = date('Y-m-d H:i:s').':' .$value['territory'].' : '
                .'FeatureArtist : '. $value['artistName'];
                //unset the broken images variable in the array
                unset($featured);
            }
        }
        $response = new Response(json_encode($featured));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
