<?php
namespace RestBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

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

	    // Function Name : getTopAlbums
	    // Function Description : This function is used to getTopAlbums.

	    /**
     	* @Route("/get_top_albums", name="get_top_albums")
     	*/
     	public function getTopAlbumsAction()
     	{
     		$territory 		= 'US';
     		$repository 	= $this->getDoctrine()->getRepository('RestBundle:TopAlbums');
     		$topAlbumsList  = $repository->getTopAlbumsList($territory);

     		if ((count($topAlbumsList) < 1) || ($topAlbumsList === false)) {
     			$this->log('a list of top albums was not available for ' . $territory, "cache_phase2");
     		} else {

				// creating a list of the album ids and provider types.
     			$ids_provider_type =array();
     			$id 	= array();
     			$type 	= array();
     			foreach ($topAlbumsList as $topAlbum) {
     				if ($topAlbum->getAlbum() != 0) {
     					if (empty($ids_provider_type)) {
     						$id[] 	= $topAlbum->getAlbum();
     						$type[]	= "'".$topAlbum->getProviderType()."'";
     					}
     				}
     			}

     			$ids_provider_type = array('id'=>$id,'type'=>$type);


				// Gets the album info for each album on the list
     			if ($ids_provider_type != '') {
     				$Album 	= $this->getDoctrine()->getRepository('RestBundle:Albums');
     				$topAlbumData = $Album->getTopAlbumData($territory, $ids_provider_type);
     			} else {
     				$topAlbumData = array();
     			}


     			if (!empty($topAlbumData)) {
     				foreach ($topAlbumData as $key => $data) {
     					$topAlbumData[$key]['topAlbumImage'] = $data['cdnpath'] . '/' . $data['imageSaveasname'];
     					$topAlbumData[$key]['albumSongs'] 	 = $this->getAlbumSongsNew($data['prodid'], $data['providerType'], $territory);
     				}
     			}

     		}
     		echo "<pre>";
     		print_r($topAlbumData);
     		die;
     		$view = $this->view($topAlbumData);
     		return $this->handleView($view);
     	}

     	function getAlbumSongsNew($prodId, $provider, $territory) {
     		$countryPrefix 	= $this->getCountryPrefix($territory);
     		$Album 			= $this->getDoctrine()->getRepository('RestBundle:Albums');
     		$albumData 		= $Album->findSongsForAlbum($prodId, $provider);
     		$albumSongs 	= array();

     		if (!empty($albumData)) {
     			$Song = $this->getDoctrine()->getRepository('RestBundle:Songs');

     			foreach ($albumData as $album) {
     				$albumSongs[$album['prodid']] = $Song->getSongDetails($album['prodid'], $provider, $territory);
     			}
     		}

     		foreach ($albumSongs as $k => $albumSong) {
     			foreach ($albumSong as $key => $value) {
     				$albumSongs[$k][$key]['CdnPath'] = $value['cdnpath'];
     				$albumSongs[$k][$key]['SaveAsName'] = $value['sampleSaveasname'];
     				$albumSongs[$k][$key]['FullLength_Duration'] = $value['fulllengthDuration'];

     				unset($albumSongs[$k][$key]['sampleDuration']);
     				unset($albumSongs[$k][$key]['fulllengthDuration']);
     				unset($albumSongs[$k][$key]['sequenceNumber']);
     				unset($albumSongs[$k][$key]['title']);
     				unset($albumSongs[$k][$key]['genre']);
     				unset($albumSongs[$k][$key]['country']);
     			}
     		}
     		return $albumSongs;
     	}



		/**
	    * Function Name : getCountryPrefix
	    * Function Description : This function is used to get the country prefix
	    */
		public function getCountryPrefix($territory)
		{
			$countryPrefix = strtolower($territory) . "_";
			return $countryPrefix;
		}

	}