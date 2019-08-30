<?php
namespace BisratK\TeamManager\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Bisrat kidane <bisrat.kidane@gmail.com>
 */
class AddressTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \BisratK\TeamManager\Domain\Model\Address
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \BisratK\TeamManager\Domain\Model\Address();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getStreetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStreet()
        );
    }

    /**
     * @test
     */
    public function setStreetForStringSetsStreet()
    {
        $this->subject->setStreet('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'street',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getZipReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getZip()
        );
    }

    /**
     * @test
     */
    public function setZipForStringSetsZip()
    {
        $this->subject->setZip('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'zip',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTownReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTown()
        );
    }

    /**
     * @test
     */
    public function setTownForStringSetsTown()
    {
        $this->subject->setTown('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'town',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPOBoxReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPOBox()
        );
    }

    /**
     * @test
     */
    public function setPOBoxForStringSetsPOBox()
    {
        $this->subject->setPOBox('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'pOBox',
            $this->subject
        );
    }
}
