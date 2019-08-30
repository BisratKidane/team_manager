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
 * TeamController
 */
class TeamController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * teamRepository
     * 
     * @var \BisratK\TeamManager\Domain\Repository\TeamRepository
     * @inject
     */
    protected $teamRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $teams = $this->teamRepository->findAll();
        $this->view->assign('teams', $teams);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \BisratK\TeamManager\Domain\Model\Team $newTeam
     * @return void
     */
    public function createAction(\BisratK\TeamManager\Domain\Model\Team $newTeam)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->teamRepository->add($newTeam);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \BisratK\TeamManager\Domain\Model\Team $team
     * @ignorevalidation $team
     * @return void
     */
    public function editAction(\BisratK\TeamManager\Domain\Model\Team $team)
    {
        $this->view->assign('team', $team);
    }

    /**
     * action update
     * 
     * @param \BisratK\TeamManager\Domain\Model\Team $team
     * @return void
     */
    public function updateAction(\BisratK\TeamManager\Domain\Model\Team $team)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->teamRepository->update($team);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \BisratK\TeamManager\Domain\Model\Team $team
     * @return void
     */
    public function deleteAction(\BisratK\TeamManager\Domain\Model\Team $team)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->teamRepository->remove($team);
        $this->redirect('list');
    }
}
