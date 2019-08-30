<?php
namespace BisratK\TeamManager\Controller;


/***
 *
 * This file is part of the "Team" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Bisrat kidane <bisrat.kidane@gmail.com>, BisratK
 *
 ***/
/**
 * StaffController
 */
class StaffController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * staffRepository
     * 
     * @var \BisratK\TeamManager\Domain\Repository\StaffRepository
     * @inject
     */
    protected $staffRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $staffs = $this->staffRepository->findAll();
        $this->view->assign('staffs', $staffs);
    }
}
