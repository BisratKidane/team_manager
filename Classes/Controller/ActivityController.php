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
 * ActivityController
 */
class ActivityController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * activityRepository
     * 
     * @var \BisratK\TeamManager\Domain\Repository\ActivityRepository
     * @inject
     */
    protected $activityRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $activities = $this->activityRepository->findAll();
        $this->view->assign('activities', $activities);
    }

    /**
     * action show
     * 
     * @param \BisratK\TeamManager\Domain\Model\Activity $activity
     * @return void
     */
    public function showAction(\BisratK\TeamManager\Domain\Model\Activity $activity)
    {
        $this->view->assign('activity', $activity);
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
     * @param \BisratK\TeamManager\Domain\Model\Activity $newActivity
     * @return void
     */
    public function createAction(\BisratK\TeamManager\Domain\Model\Activity $newActivity)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->activityRepository->add($newActivity);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \BisratK\TeamManager\Domain\Model\Activity $activity
     * @ignorevalidation $activity
     * @return void
     */
    public function editAction(\BisratK\TeamManager\Domain\Model\Activity $activity)
    {
        $this->view->assign('activity', $activity);
    }

    /**
     * action update
     * 
     * @param \BisratK\TeamManager\Domain\Model\Activity $activity
     * @return void
     */
    public function updateAction(\BisratK\TeamManager\Domain\Model\Activity $activity)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->activityRepository->update($activity);
        $this->redirect('list');
    }
}
