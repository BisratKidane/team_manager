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
 * RoleController
 */
class RoleController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $roles = $this->roleRepository->findAll();
        $this->view->assign('roles', $roles);
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
     * @param \BisratK\TeamManager\Domain\Model\Role $newRole
     * @return void
     */
    public function createAction(\BisratK\TeamManager\Domain\Model\Role $newRole)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->roleRepository->add($newRole);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \BisratK\TeamManager\Domain\Model\Role $role
     * @ignorevalidation $role
     * @return void
     */
    public function editAction(\BisratK\TeamManager\Domain\Model\Role $role)
    {
        $this->view->assign('role', $role);
    }

    /**
     * action update
     * 
     * @param \BisratK\TeamManager\Domain\Model\Role $role
     * @return void
     */
    public function updateAction(\BisratK\TeamManager\Domain\Model\Role $role)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->roleRepository->update($role);
        $this->redirect('list');
    }
}
