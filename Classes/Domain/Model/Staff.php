<?php
namespace BisratK\TeamManager\Domain\Model;


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
 * Staff
 */
class Staff extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
{

    /**
     * roles
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Role>
     * @cascade remove
     * @lazy
     */
    protected $roles = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->roles = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Role
     * 
     * @param \BisratK\TeamManager\Domain\Model\Role $role
     * @return void
     */
    public function addRole(\BisratK\TeamManager\Domain\Model\Role $role)
    {
        $this->roles->attach($role);
    }

    /**
     * Removes a Role
     * 
     * @param \BisratK\TeamManager\Domain\Model\Role $roleToRemove The Role to be removed
     * @return void
     */
    public function removeRole(\BisratK\TeamManager\Domain\Model\Role $roleToRemove)
    {
        $this->roles->detach($roleToRemove);
    }

    /**
     * Returns the roles
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Role> $roles
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Sets the roles
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Role> $roles
     * @return void
     */
    public function setRoles(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $roles)
    {
        $this->roles = $roles;
    }
}
