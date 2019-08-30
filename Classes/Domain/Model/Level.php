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
 * Level
 */
class Level extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{

    /**
     * title
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * info
     * 
     * @var string
     */
    protected $info = '';

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the info
     * 
     * @return string $info
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets the info
     * 
     * @param string $info
     * @return void
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }
}
