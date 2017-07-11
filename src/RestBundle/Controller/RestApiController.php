<?php


namespace RestBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


//use RestBundle\Entity\FeaturedArtistsComposers;


class RestApiController extends FOSRestController
{
    /**
     * @Route("/api")
     */
    public function indexAction()
    {
        $data = array("hello" => "worldss");
        $view = $this->view($data);
        return $this->handleView($view);
    }


    /**
	* @Route("/featuredArtist&Composer")
	*/
	public function featuredArtistAction()
	{
		global $brokenImages;

		$featuredRepository = $this->getDoctrine()->getRepository('RestBundle:FeaturedArtistsComposers');
		$fac =$featuredRepository->getFeaturedArtists();
		
		// if(!empty($queryResult))
		// {
		// 	foreach($queryResult as $key =>$val)
		// 	{
		// 		$albumids = explode(',',$val['album']);
		// 		if($val['album'] != 0)
		// 		{
		// 			$streamSongs = array();
		// 			for($i=0;$i<=count($albumids);$i++)
		// 			{

		// 			}

		// 			$featureImageURL = "featuredimg/".
		// 		}
		// 	}
		// }


		foreach ($fac as $key => $value) {
			$featureImageURL= $this->container->getParameter('cdn_url'). 'featuredimg/' . $value['artistImage'];
			$featured[$key] = array(
				'artistName'   => $value['artistName'],
				'artistImage'  => $featureImageURL,
				'territory'    => $value['territory'],
				'album'        => $value['album'],
				'language'     => $value['language'],
				'providerType' => $value['providerType'],
				);
			
			if(!$featuredRepository->checkImageFileExist($featureImageURL))
			{
		        $brokenImages[] = date('Y-m-d H:i:s').' : ' .$value['territory'].' : ' .'Feature Artist and Composer : '. $value['artistName'];
		        //unset the broken images variable in the array
		        unset($featured);
	    	}
		}
		
		$response = new Response(json_encode($featured));
		$response->headers->set('Content-Type', 'application/json');

		return $response;

	}



}