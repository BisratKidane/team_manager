<?php
namespace BisratK\TeamManager\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Bisrat kidane <bisrat.kidane@gmail.com>
 */
class RoleControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \BisratK\TeamManager\Controller\RoleController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\BisratK\TeamManager\Controller\RoleController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllRolesFromRepositoryAndAssignsThemToView()
    {

        $allRoles = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $roleRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $roleRepository->expects(self::once())->method('findAll')->will(self::returnValue($allRoles));
        $this->inject($this->subject, 'roleRepository', $roleRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('roles', $allRoles);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenRoleToRoleRepository()
    {
        $role = new \BisratK\TeamManager\Domain\Model\Role();

        $roleRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $roleRepository->expects(self::once())->method('add')->with($role);
        $this->inject($this->subject, 'roleRepository', $roleRepository);

        $this->subject->createAction($role);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenRoleToView()
    {
        $role = new \BisratK\TeamManager\Domain\Model\Role();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('role', $role);

        $this->subject->editAction($role);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenRoleInRoleRepository()
    {
        $role = new \BisratK\TeamManager\Domain\Model\Role();

        $roleRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $roleRepository->expects(self::once())->method('update')->with($role);
        $this->inject($this->subject, 'roleRepository', $roleRepository);

        $this->subject->updateAction($role);
    }
}
