<?php
 /**
  * Src/RestBundle/Repository/TopAlbumsRepository.php
  * PHP Version 7.1
  *
  * @category Class
  * @package  TopAlbumsRepository
  * @author   Vikas kale <vikas.kale12@gmail.com>
  * @license  http://www.freegalmusic.com GNU General Public License
  * @link     http://www.freegalmusic.com/
  */
namespace RestBundle\Repository;

 /**
  * TopAlbumsRepository
  * Src/RestBundle/Repository/TopAlbumsRepository.php
  * PHP Version 7.1
  *
  * @category Class
  * @package  TopAlbumsRepository
  * @author   Vikas kale <vikas.kale12@gmail.com>
  * @license  http://www.freegalmusic.com GNU General Public License
  * @link     http://www.freegalmusic.com/
  */

class TopAlbumsRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * This function is used to get Top getTopAlbumsList
     *
     * @param  string $territory for api
     *                           for access territory wise top Singles
     * @return  return Array Data
     */
    public function getTopAlbumsList($territory)
    {
        $language = 'EN';
        $limit = 5;
        $query = $this->createQueryBuilder('TA')
            ->where('TA.territory = :territory')
            ->andWhere('TA.language= :language')
            ->setParameter('territory', $territory)
            ->setParameter('language', $language)
            ->orderBy('TA.sortid', 'ASC')
            ->setMaxResults($limit)
            ->getQuery();

        $topAlbumsList = $query->getResult();

        return $topAlbumsList;
    }
    /**
     * This function is used to get Top getAllTerritory
     *
     * @return   Array Data
     */

    public function getAllTerritory()
    {
        $allTerritory = array('au','bm','ca','de','gb','ie','ku','us','nz');
        return $allTerritory;
    }
    /**
     * This function is used to get Top getProviderType
     *
     * @param array  $topAlbumsList for api
     *                          for access territory wise top Singles
     *
     * @return               Array Data
     */
    public function getProviderType($topAlbumsList)
    {
        $idsProviderType =array();
        $id = array();
        $type = array();
        foreach ($topAlbumsList as $topAlbum) {
            if ($topAlbum->getAlbum() != 0) {
                if (empty($idsProviderType)) {
                    $id[] = $topAlbum->getAlbum();
                    $type[] = "'" . $topAlbum->getProviderType() . "'";
                }
            }
        }
        $idsProviderType = array('id'=>$id,'type'=>$type);

        return $idsProviderType;
    }

    /**
     * This function is used to get Top artworkToken
     *
     * @param array $uri for api
     *                   for access territory wise top Singles
     *
     * @return Array Data
     */
    public function artworkToken($uri)
    {
        $gen = '5';
        $key = 'LibrariesrockwithFreegalmusic.com!';
        $uri = '/' . $uri;
        $hmac = hash_hmac("sha1", $uri, $key, false);
        $hash = sprintf("%1.1s%20.20s", $gen, $hmac);
        $uri .= "?token=$hash";
        return $uri;
    }

    /**
     * This function is used to get Top getAlbumSongsNew
     *
     * @param $prodId, $provider, $territory for api
     *                   for access territory wise top Singles
     *
     * @return Array Data
     */
    public function getAlbumSongsNew($prodId, $provider, $territory)
    {
        $countryPrefix  = $this->getCountryPrefix($territory);
        $Album          = $this->getEntityManager()
            ->getRepository('RestBundle:Albums');
        $albumData      = $Album->findSongsForAlbum($prodId, $provider);
        $albumSongs     = array();

        if (!empty($albumData)) {
            $Song = $this->getEntityManager()
                ->getRepository('RestBundle:Songs');

            foreach ($albumData as $album) {
                $albumSongs[$album['prodid']] = $Song
                    ->getSongDetails($album['prodid'], $provider, $territory);
            }
        }

        foreach ($albumSongs as $k => $albumSong) {
            foreach ($albumSong as $key => $value) {
                $albumSongs[$k][$key]['CdnPath'] = $value['cdnpath'];
                $albumSongs[$k][$key]['SaveAsName'] = $value['sampleSaveasname'];
                $lengthDur = $value['fulllengthDuration'];
                $albumSongs[$k][$key]['FullLength_Duration'] = $lengthDur;

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
     * This function is used to get Top artworkToken
     *
     * @param array $territory for api
     *                         for access territory wise top Singles
     *
     * @return string
     */
    public function getCountryPrefix($territory)
    {
        $countryPrefix = strtolower($territory) . "_";
        return $countryPrefix;
    }
}
