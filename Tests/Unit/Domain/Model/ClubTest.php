<?php
namespace BisratK\TeamManager\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Bisrat kidane <bisrat.kidane@gmail.com>
 */
class ClubTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \BisratK\TeamManager\Domain\Model\Club
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \BisratK\TeamManager\Domain\Model\Club();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getClubNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getClubName()
        );
    }

    /**
     * @test
     */
    public function setClubNameForStringSetsClubName()
    {
        $this->subject->setClubName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'clubName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAboutReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAbout()
        );
    }

    /**
     * @test
     */
    public function setAboutForStringSetsAbout()
    {
        $this->subject->setAbout('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'about',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFoundDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getFoundDate()
        );
    }

    /**
     * @test
     */
    public function setFoundDateForDateTimeSetsFoundDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setFoundDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'foundDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStaffReturnsInitialValueForStaff()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getStaff()
        );
    }

    /**
     * @test
     */
    public function setStaffForObjectStorageContainingStaffSetsStaff()
    {
        $staff = new \BisratK\TeamManager\Domain\Model\Staff();
        $objectStorageHoldingExactlyOneStaff = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneStaff->attach($staff);
        $this->subject->setStaff($objectStorageHoldingExactlyOneStaff);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneStaff,
            'staff',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addStaffToObjectStorageHoldingStaff()
    {
        $staff = new \BisratK\TeamManager\Domain\Model\Staff();
        $staffObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $staffObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($staff));
        $this->inject($this->subject, 'staff', $staffObjectStorageMock);

        $this->subject->addStaff($staff);
    }

    /**
     * @test
     */
    public function removeStaffFromObjectStorageHoldingStaff()
    {
        $staff = new \BisratK\TeamManager\Domain\Model\Staff();
        $staffObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $staffObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($staff));
        $this->inject($this->subject, 'staff', $staffObjectStorageMock);

        $this->subject->removeStaff($staff);
    }

    /**
     * @test
     */
    public function getTeamsReturnsInitialValueForTeam()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTeams()
        );
    }

    /**
     * @test
     */
    public function setTeamsForObjectStorageContainingTeamSetsTeams()
    {
        $team = new \BisratK\TeamManager\Domain\Model\Team();
        $objectStorageHoldingExactlyOneTeams = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTeams->attach($team);
        $this->subject->setTeams($objectStorageHoldingExactlyOneTeams);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTeams,
            'teams',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTeamToObjectStorageHoldingTeams()
    {
        $team = new \BisratK\TeamManager\Domain\Model\Team();
        $teamsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $teamsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($team));
        $this->inject($this->subject, 'teams', $teamsObjectStorageMock);

        $this->subject->addTeam($team);
    }

    /**
     * @test
     */
    public function removeTeamFromObjectStorageHoldingTeams()
    {
        $team = new \BisratK\TeamManager\Domain\Model\Team();
        $teamsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $teamsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($team));
        $this->inject($this->subject, 'teams', $teamsObjectStorageMock);

        $this->subject->removeTeam($team);
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForAddress()
    {
        self::assertEquals(
            null,
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForAddressSetsAddress()
    {
        $addressFixture = new \BisratK\TeamManager\Domain\Model\Address();
        $this->subject->setAddress($addressFixture);

        self::assertAttributeEquals(
            $addressFixture,
            'address',
            $this->subject
        );
    }
}
