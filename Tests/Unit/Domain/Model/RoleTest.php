<?php
namespace BisratK\TeamManager\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Bisrat kidane <bisrat.kidane@gmail.com>
 */
class RoleTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \BisratK\TeamManager\Domain\Model\Role
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \BisratK\TeamManager\Domain\Model\Role();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getRoleTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRoleTitle()
        );
    }

    /**
     * @test
     */
    public function setRoleTitleForStringSetsRoleTitle()
    {
        $this->subject->setRoleTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'roleTitle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }
}
