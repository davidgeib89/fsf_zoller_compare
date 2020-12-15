<?php
namespace FREESIXTYFIVE\FsfZollerCompare\Controller;


/***
 *
 * This file is part of the "Zoller Compare" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 David Geib <d.geib@freesixtyfive.de>, FREESIXTYFIVE
 *
 ***/
/**
 * ZollerCompareController
 */
class ZollerCompareController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * zollerCompareRepository
     * 
     * @var \FREESIXTYFIVE\FsfZollerCompare\Domain\Repository\ZollerCompareRepository
     */
    protected $zollerCompareRepository = null;

    /**
     * @param \FREESIXTYFIVE\FsfZollerCompare\Domain\Repository\ZollerCompareRepository $zollerCompareRepository
     */
    public function injectZollerCompareRepository(\FREESIXTYFIVE\FsfZollerCompare\Domain\Repository\ZollerCompareRepository $zollerCompareRepository)
    {
        $this->zollerCompareRepository = $zollerCompareRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $zollerCompares = $this->zollerCompareRepository->findAll();
        $this->view->assign('zollerCompares', $zollerCompares);
    }
}
