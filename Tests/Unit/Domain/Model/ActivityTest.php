<?php
namespace BisratK\TeamManager\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Bisrat kidane <bisrat.kidane@gmail.com>
 */
class ActivityTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \BisratK\TeamManager\Domain\Model\Activity
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \BisratK\TeamManager\Domain\Model\Activity();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getActivityTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getActivityTitle()
        );
    }

    /**
     * @test
     */
    public function setActivityTitleForStringSetsActivityTitle()
    {
        $this->subject->setActivityTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'activityTitle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMeettimeReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getMeettime()
        );
    }

    /**
     * @test
     */
    public function setMeettimeForDateTimeSetsMeettime()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setMeettime($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'meettime',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getActivityGoalReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getActivityGoal()
        );
    }

    /**
     * @test
     */
    public function setActivityGoalForStringSetsActivityGoal()
    {
        $this->subject->setActivityGoal('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'activityGoal',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForAddress()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForObjectStorageContainingAddressSetsAddress()
    {
        $addres = new \BisratK\TeamManager\Domain\Model\Address();
        $objectStorageHoldingExactlyOneAddress = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAddress->attach($addres);
        $this->subject->setAddress($objectStorageHoldingExactlyOneAddress);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAddress,
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addAddresToObjectStorageHoldingAddress()
    {
        $addres = new \BisratK\TeamManager\Domain\Model\Address();
        $addressObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $addressObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($addres));
        $this->inject($this->subject, 'address', $addressObjectStorageMock);

        $this->subject->addAddres($addres);
    }

    /**
     * @test
     */
    public function removeAddresFromObjectStorageHoldingAddress()
    {
        $addres = new \BisratK\TeamManager\Domain\Model\Address();
        $addressObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $addressObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($addres));
        $this->inject($this->subject, 'address', $addressObjectStorageMock);

        $this->subject->removeAddres($addres);
    }
}
