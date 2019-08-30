<?php
namespace BisratK\TeamManager\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Bisrat kidane <bisrat.kidane@gmail.com>
 */
class TeamTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \BisratK\TeamManager\Domain\Model\Team
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \BisratK\TeamManager\Domain\Model\Team();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTeamNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTeamName()
        );
    }

    /**
     * @test
     */
    public function setTeamNameForStringSetsTeamName()
    {
        $this->subject->setTeamName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'teamName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTeamInfoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTeamInfo()
        );
    }

    /**
     * @test
     */
    public function setTeamInfoForStringSetsTeamInfo()
    {
        $this->subject->setTeamInfo('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'teamInfo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPlayersReturnsInitialValueForPlayer()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPlayers()
        );
    }

    /**
     * @test
     */
    public function setPlayersForObjectStorageContainingPlayerSetsPlayers()
    {
        $player = new \BisratK\TeamManager\Domain\Model\Player();
        $objectStorageHoldingExactlyOnePlayers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePlayers->attach($player);
        $this->subject->setPlayers($objectStorageHoldingExactlyOnePlayers);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePlayers,
            'players',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addPlayerToObjectStorageHoldingPlayers()
    {
        $player = new \BisratK\TeamManager\Domain\Model\Player();
        $playersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $playersObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($player));
        $this->inject($this->subject, 'players', $playersObjectStorageMock);

        $this->subject->addPlayer($player);
    }

    /**
     * @test
     */
    public function removePlayerFromObjectStorageHoldingPlayers()
    {
        $player = new \BisratK\TeamManager\Domain\Model\Player();
        $playersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $playersObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($player));
        $this->inject($this->subject, 'players', $playersObjectStorageMock);

        $this->subject->removePlayer($player);
    }

    /**
     * @test
     */
    public function getActivitiesReturnsInitialValueForActivity()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getActivities()
        );
    }

    /**
     * @test
     */
    public function setActivitiesForObjectStorageContainingActivitySetsActivities()
    {
        $activity = new \BisratK\TeamManager\Domain\Model\Activity();
        $objectStorageHoldingExactlyOneActivities = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneActivities->attach($activity);
        $this->subject->setActivities($objectStorageHoldingExactlyOneActivities);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneActivities,
            'activities',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addActivityToObjectStorageHoldingActivities()
    {
        $activity = new \BisratK\TeamManager\Domain\Model\Activity();
        $activitiesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $activitiesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($activity));
        $this->inject($this->subject, 'activities', $activitiesObjectStorageMock);

        $this->subject->addActivity($activity);
    }

    /**
     * @test
     */
    public function removeActivityFromObjectStorageHoldingActivities()
    {
        $activity = new \BisratK\TeamManager\Domain\Model\Activity();
        $activitiesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $activitiesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($activity));
        $this->inject($this->subject, 'activities', $activitiesObjectStorageMock);

        $this->subject->removeActivity($activity);
    }

    /**
     * @test
     */
    public function getLevelReturnsInitialValueForLevel()
    {
        self::assertEquals(
            null,
            $this->subject->getLevel()
        );
    }

    /**
     * @test
     */
    public function setLevelForLevelSetsLevel()
    {
        $levelFixture = new \BisratK\TeamManager\Domain\Model\Level();
        $this->subject->setLevel($levelFixture);

        self::assertAttributeEquals(
            $levelFixture,
            'level',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStuffReturnsInitialValueForStaff()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getStuff()
        );
    }

    /**
     * @test
     */
    public function setStuffForObjectStorageContainingStaffSetsStuff()
    {
        $stuff = new \BisratK\TeamManager\Domain\Model\Staff();
        $objectStorageHoldingExactlyOneStuff = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneStuff->attach($stuff);
        $this->subject->setStuff($objectStorageHoldingExactlyOneStuff);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneStuff,
            'stuff',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addStuffToObjectStorageHoldingStuff()
    {
        $stuff = new \BisratK\TeamManager\Domain\Model\Staff();
        $stuffObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $stuffObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($stuff));
        $this->inject($this->subject, 'stuff', $stuffObjectStorageMock);

        $this->subject->addStuff($stuff);
    }

    /**
     * @test
     */
    public function removeStuffFromObjectStorageHoldingStuff()
    {
        $stuff = new \BisratK\TeamManager\Domain\Model\Staff();
        $stuffObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $stuffObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($stuff));
        $this->inject($this->subject, 'stuff', $stuffObjectStorageMock);

        $this->subject->removeStuff($stuff);
    }
}
