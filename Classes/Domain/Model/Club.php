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
 * Club
 */
class Club extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * clubName
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $clubName = '';

    /**
     * about
     * 
     * @var string
     */
    protected $about = '';

    /**
     * foundDate
     * 
     * @var \DateTime
     */
    protected $foundDate = null;

    /**
     * staff
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Staff>
     * @cascade remove
     */
    protected $staff = null;

    /**
     * teams
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Team>
     * @cascade remove
     */
    protected $teams = null;

    /**
     * address
     * 
     * @var \BisratK\TeamManager\Domain\Model\Address
     */
    protected $address = null;

    /**
     * Returns the clubName
     * 
     * @return string $clubName
     */
    public function getClubName()
    {
        return $this->clubName;
    }

    /**
     * Sets the clubName
     * 
     * @param string $clubName
     * @return void
     */
    public function setClubName($clubName)
    {
        $this->clubName = $clubName;
    }

    /**
     * Returns the about
     * 
     * @return string $about
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Sets the about
     * 
     * @param string $about
     * @return void
     */
    public function setAbout($about)
    {
        $this->about = $about;
    }

    /**
     * Returns the foundDate
     * 
     * @return \DateTime $foundDate
     */
    public function getFoundDate()
    {
        return $this->foundDate;
    }

    /**
     * Sets the foundDate
     * 
     * @param \DateTime $foundDate
     * @return void
     */
    public function setFoundDate(\DateTime $foundDate)
    {
        $this->foundDate = $foundDate;
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
        $this->staff = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->teams = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Staff
     * 
     * @param \BisratK\TeamManager\Domain\Model\Staff $staff
     * @return void
     */
    public function addStaff(\BisratK\TeamManager\Domain\Model\Staff $staff)
    {
        $this->staff->attach($staff);
    }

    /**
     * Removes a Staff
     * 
     * @param \BisratK\TeamManager\Domain\Model\Staff $staffToRemove The Staff to be removed
     * @return void
     */
    public function removeStaff(\BisratK\TeamManager\Domain\Model\Staff $staffToRemove)
    {
        $this->staff->detach($staffToRemove);
    }

    /**
     * Returns the staff
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Staff> $staff
     */
    public function getStaff()
    {
        return $this->staff;
    }

    /**
     * Sets the staff
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Staff> $staff
     * @return void
     */
    public function setStaff(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $staff)
    {
        $this->staff = $staff;
    }

    /**
     * Adds a Team
     * 
     * @param \BisratK\TeamManager\Domain\Model\Team $team
     * @return void
     */
    public function addTeam(\BisratK\TeamManager\Domain\Model\Team $team)
    {
        $this->teams->attach($team);
    }

    /**
     * Removes a Team
     * 
     * @param \BisratK\TeamManager\Domain\Model\Team $teamToRemove The Team to be removed
     * @return void
     */
    public function removeTeam(\BisratK\TeamManager\Domain\Model\Team $teamToRemove)
    {
        $this->teams->detach($teamToRemove);
    }

    /**
     * Returns the teams
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Team> $teams
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * Sets the teams
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Team> $teams
     * @return void
     */
    public function setTeams(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $teams)
    {
        $this->teams = $teams;
    }

    /**
     * Returns the address
     * 
     * @return \BisratK\TeamManager\Domain\Model\Address $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     * 
     * @param \BisratK\TeamManager\Domain\Model\Address $address
     * @return void
     */
    public function setAddress(\BisratK\TeamManager\Domain\Model\Address $address)
    {
        $this->address = $address;
    }
}
