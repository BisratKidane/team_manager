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
 * Team
 */
class Team extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * teamName
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $teamName = '';

    /**
     * teamInfo
     * 
     * @var string
     */
    protected $teamInfo = '';

    /**
     * players
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Player>
     * @cascade remove
     * @lazy
     */
    protected $players = null;

    /**
     * activities
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Activity>
     * @lazy
     */
    protected $activities = null;

    /**
     * level
     * 
     * @var \BisratK\TeamManager\Domain\Model\Level
     * @lazy
     */
    protected $level = null;

    /**
     * stuff
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Staff>
     * @cascade remove
     */
    protected $stuff = null;

    /**
     * Returns the teamName
     * 
     * @return string $teamName
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * Sets the teamName
     * 
     * @param string $teamName
     * @return void
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;
    }

    /**
     * Returns the teamInfo
     * 
     * @return string $teamInfo
     */
    public function getTeamInfo()
    {
        return $this->teamInfo;
    }

    /**
     * Sets the teamInfo
     * 
     * @param string $teamInfo
     * @return void
     */
    public function setTeamInfo($teamInfo)
    {
        $this->teamInfo = $teamInfo;
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
        $this->players = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->activities = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->stuff = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Player
     * 
     * @param \BisratK\TeamManager\Domain\Model\Player $player
     * @return void
     */
    public function addPlayer(\BisratK\TeamManager\Domain\Model\Player $player)
    {
        $this->players->attach($player);
    }

    /**
     * Removes a Player
     * 
     * @param \BisratK\TeamManager\Domain\Model\Player $playerToRemove The Player to be removed
     * @return void
     */
    public function removePlayer(\BisratK\TeamManager\Domain\Model\Player $playerToRemove)
    {
        $this->players->detach($playerToRemove);
    }

    /**
     * Returns the players
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Player> $players
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Sets the players
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Player> $players
     * @return void
     */
    public function setPlayers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $players)
    {
        $this->players = $players;
    }

    /**
     * Adds a Activity
     * 
     * @param \BisratK\TeamManager\Domain\Model\Activity $activity
     * @return void
     */
    public function addActivity(\BisratK\TeamManager\Domain\Model\Activity $activity)
    {
        $this->activities->attach($activity);
    }

    /**
     * Removes a Activity
     * 
     * @param \BisratK\TeamManager\Domain\Model\Activity $activityToRemove The Activity to be removed
     * @return void
     */
    public function removeActivity(\BisratK\TeamManager\Domain\Model\Activity $activityToRemove)
    {
        $this->activities->detach($activityToRemove);
    }

    /**
     * Returns the activities
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Activity> $activities
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * Sets the activities
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Activity> $activities
     * @return void
     */
    public function setActivities(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $activities)
    {
        $this->activities = $activities;
    }

    /**
     * Returns the level
     * 
     * @return \BisratK\TeamManager\Domain\Model\Level $level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets the level
     * 
     * @param \BisratK\TeamManager\Domain\Model\Level $level
     * @return void
     */
    public function setLevel(\BisratK\TeamManager\Domain\Model\Level $level)
    {
        $this->level = $level;
    }

    /**
     * Adds a Staff
     * 
     * @param \BisratK\TeamManager\Domain\Model\Staff $stuff
     * @return void
     */
    public function addStuff(\BisratK\TeamManager\Domain\Model\Staff $stuff)
    {
        $this->stuff->attach($stuff);
    }

    /**
     * Removes a Staff
     * 
     * @param \BisratK\TeamManager\Domain\Model\Staff $stuffToRemove The Staff to be removed
     * @return void
     */
    public function removeStuff(\BisratK\TeamManager\Domain\Model\Staff $stuffToRemove)
    {
        $this->stuff->detach($stuffToRemove);
    }

    /**
     * Returns the stuff
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Staff> $stuff
     */
    public function getStuff()
    {
        return $this->stuff;
    }

    /**
     * Sets the stuff
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BisratK\TeamManager\Domain\Model\Staff> $stuff
     * @return void
     */
    public function setStuff(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $stuff)
    {
        $this->stuff = $stuff;
    }
}
