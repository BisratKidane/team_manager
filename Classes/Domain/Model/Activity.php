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
 * Activity
 */
class Activity extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * activityTitle
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $activityTitle = '';

    /**
     * meettime
     * 
     * @var \DateTime
     */
    protected $meettime = null;

    /**
     * activityGoal
     * 
     * @var string
     */
    protected $activityGoal = '';

    /**
     * address
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Address>
     * @cascade remove
     */
    protected $address = null;

    /**
     * Returns the activityTitle
     * 
     * @return string $activityTitle
     */
    public function getActivityTitle()
    {
        return $this->activityTitle;
    }

    /**
     * Sets the activityTitle
     * 
     * @param string $activityTitle
     * @return void
     */
    public function setActivityTitle($activityTitle)
    {
        $this->activityTitle = $activityTitle;
    }

    /**
     * Returns the meettime
     * 
     * @return \DateTime $meettime
     */
    public function getMeettime()
    {
        return $this->meettime;
    }

    /**
     * Sets the meettime
     * 
     * @param \DateTime $meettime
     * @return void
     */
    public function setMeettime(\DateTime $meettime)
    {
        $this->meettime = $meettime;
    }

    /**
     * Returns the activityGoal
     * 
     * @return string $activityGoal
     */
    public function getActivityGoal()
    {
        return $this->activityGoal;
    }

    /**
     * Sets the activityGoal
     * 
     * @param string $activityGoal
     * @return void
     */
    public function setActivityGoal($activityGoal)
    {
        $this->activityGoal = $activityGoal;
    }

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
        $this->address = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Address
     * 
     * @param \BisratK\TeamManager\Domain\Model\Address $addres
     * @return void
     */
    public function addAddres(\BisratK\TeamManager\Domain\Model\Address $addres)
    {
        $this->address->attach($addres);
    }

    /**
     * Removes a Address
     * 
     * @param \BisratK\TeamManager\Domain\Model\Address $addresToRemove The Address to be removed
     * @return void
     */
    public function removeAddres(\BisratK\TeamManager\Domain\Model\Address $addresToRemove)
    {
        $this->address->detach($addresToRemove);
    }

    /**
     * Returns the address
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Address> $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Address> $address
     * @return void
     */
    public function setAddress(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $address)
    {
        $this->address = $address;
    }
}
