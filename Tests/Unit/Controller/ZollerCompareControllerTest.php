<?php
namespace FREESIXTYFIVE\FsfZollerCompare\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class ZollerCompareControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerCompare\Controller\ZollerCompareController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerCompare\Controller\ZollerCompareController::class)
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
    public function listActionFetchesAllZollerComparesFromRepositoryAndAssignsThemToView()
    {

        $allZollerCompares = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $zollerCompareRepository = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerCompare\Domain\Repository\ZollerCompareRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $zollerCompareRepository->expects(self::once())->method('findAll')->will(self::returnValue($allZollerCompares));
        $this->inject($this->subject, 'zollerCompareRepository', $zollerCompareRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('zollerCompares', $allZollerCompares);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
