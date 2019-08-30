<?php
namespace BisratK\TeamManager\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Bisrat kidane <bisrat.kidane@gmail.com>
 */
class StaffControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \BisratK\TeamManager\Controller\StaffController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\BisratK\TeamManager\Controller\StaffController::class)
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
    public function listActionFetchesAllStaffsFromRepositoryAndAssignsThemToView()
    {

        $allStaffs = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $staffRepository = $this->getMockBuilder(\BisratK\TeamManager\Domain\Repository\StaffRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $staffRepository->expects(self::once())->method('findAll')->will(self::returnValue($allStaffs));
        $this->inject($this->subject, 'staffRepository', $staffRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('staffs', $allStaffs);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
