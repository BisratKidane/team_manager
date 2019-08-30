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
 * Role
 */
class Role extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{

    /**
     * roleTitle
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $roleTitle = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Returns the roleTitle
     * 
     * @return string $roleTitle
     */
    public function getRoleTitle()
    {
        return $this->roleTitle;
    }

    /**
     * Sets the roleTitle
     * 
     * @param string $roleTitle
     * @return void
     */
    public function setRoleTitle($roleTitle)
    {
        $this->roleTitle = $roleTitle;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
