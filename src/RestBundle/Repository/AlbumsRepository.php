<?php

namespace RestBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;

/**
*AlbumsRepository
*
* This class was generated by the Doctrine ORM. Add your own custom
* repository methods below.
*/

class AlbumsRepository extends \Doctrine\ORM\EntityRepository
{
    /*
    Function Name: getTopAlbumData
    Desc: gets the data for the top albums.
    */
    public function getTopAlbumData($territory, $ids_provider_type)
    {
        $language = 'EN';
        $limit = 5;
        $nowDate = date('Y-m-d');
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select("a.prodid, a.artisttext, a.albumtitle,
                    a.artisturl, a.label, a.copyright,
                    a.providerType, a.cdnpath,
                    a.advisory, a.imageSaveasname,
                    ta.sortid as sortID,g.genre")
        ->from("RestBundle:Albums", "a")
        ->leftJoin("RestBundle:TopAlbums", "ta", "WITH", "a.prodid = ta.album and ta.territory ='".$territory."'")
        ->leftJoin("RestBundle:Songs", "s", "WITH", "a.prodid = s.referenceid AND a.providerType = s.providerType AND s.downloadstatus = '0' ")
        ->leftJoin("RestBundle:".ucfirst(strtolower($territory)).'Countries', "c", "WITH", "c.prodid = s.prodid AND c.providerType = s.providerType AND c.downloadstatus = 1 AND c.salesdate != '' AND c.salesdate < '".$nowDate."'")
        ->Join("RestBundle:Genre", "g", "WITH", "a.prodid = g.prodid")
        ->where("a.prodid IN (".implode(',', $ids_provider_type['id']).")")
        ->andwhere("a.providerType IN (".implode(',', $ids_provider_type['type']).")")
        ->groupby('a.prodid')
        ->orderBy('sortID', 'ASC')
        ->setMaxResults($limit);
        $query = $qb->getQuery();
        $topAlbumsList = $query->getArrayResult();

        return $topAlbumsList;
    }

    /*
    Function Name: findSongsForAlbum
    Desc: gets the songs for an album
    */
    public function findSongsForAlbum($prodid, $provider)
    {
        $limit = 5;
        $query = $this->createQueryBuilder('a')
        ->leftJoin("RestBundle:Genre", "g", "WITH", "a.prodid = g.prodid")
        ->leftJoin("RestBundle:Countries", "c", "WITH", "a.prodid = c.prodid")
        ->leftJoin("RestBundle:Songs", "s", "WITH", "s.referenceid=a.prodid")
        ->where("a.prodid =".$prodid)
        ->andWhere("a.providerType='".$provider."'")
        ->andWhere("a.providerType = g.providerType")
        ->groupby('a.prodid, a.providerType')
        ->orderBy('c.salesdate', 'DESC')
        ->setMaxResults($limit)
        ->getQuery();
        $albumData = $query->getArrayResult();
        return $albumData;
    }
}
