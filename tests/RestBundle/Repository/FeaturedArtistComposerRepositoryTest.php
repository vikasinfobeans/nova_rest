<?php

namespace RestBundle\Tests\Repository;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FeaturedArtistComposerRepository extends KernelTestCase
{
	/**
	 * @var \Doctrine\ORM\EntityManager
	 */
	protected $em;

	/**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        self::bootKernel();

        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

	public function testFeaturedArtists()
	{
		$result = $this->em
				->getRepository('RestBundle:FeaturedArtistsComposers')
				->getFeaturedArtists('US');
		$expectedResult =20;

		$this->assertEquals($expectedResult, count($result));

	}

	/**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();

        $this->em->close();
        $this->em = null; // avoid memory leaks
    }
}