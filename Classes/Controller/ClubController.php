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
 * ClubController
 */
class ClubController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * clubRepository
     * 
     * @var \BisratK\TeamManager\Domain\Repository\ClubRepository
     * @inject
     */
    protected $clubRepository = null;

    /**
     * action show
     * 
     * @param \BisratK\TeamManager\Domain\Model\Club $club
     * @return void
     */
    public function showAction(\BisratK\TeamManager\Domain\Model\Club $club)
    {
        $this->view->assign('club', $club);
    }
}
