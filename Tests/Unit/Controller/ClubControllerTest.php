<?php
namespace BisratK\TeamManager\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Bisrat kidane <bisrat.kidane@gmail.com>
 */
class ClubControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \BisratK\TeamManager\Controller\ClubController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\BisratK\TeamManager\Controller\ClubController::class)
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
    public function showActionAssignsTheGivenClubToView()
    {
        $club = new \BisratK\TeamManager\Domain\Model\Club();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('club', $club);

        $this->subject->showAction($club);
    }
}
