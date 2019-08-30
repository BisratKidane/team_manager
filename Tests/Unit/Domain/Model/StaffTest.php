<?php
namespace BisratK\TeamManager\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Bisrat kidane <bisrat.kidane@gmail.com>
 */
class StaffTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \BisratK\TeamManager\Domain\Model\Staff
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \BisratK\TeamManager\Domain\Model\Staff();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getRolesReturnsInitialValueForRole()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRoles()
        );
    }

    /**
     * @test
     */
    public function setRolesForObjectStorageContainingRoleSetsRoles()
    {
        $role = new \BisratK\TeamManager\Domain\Model\Role();
        $objectStorageHoldingExactlyOneRoles = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneRoles->attach($role);
        $this->subject->setRoles($objectStorageHoldingExactlyOneRoles);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRoles,
            'roles',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addRoleToObjectStorageHoldingRoles()
    {
        $role = new \BisratK\TeamManager\Domain\Model\Role();
        $rolesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $rolesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($role));
        $this->inject($this->subject, 'roles', $rolesObjectStorageMock);

        $this->subject->addRole($role);
    }

    /**
     * @test
     */
    public function removeRoleFromObjectStorageHoldingRoles()
    {
        $role = new \BisratK\TeamManager\Domain\Model\Role();
        $rolesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $rolesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($role));
        $this->inject($this->subject, 'roles', $rolesObjectStorageMock);

        $this->subject->removeRole($role);
    }
}
