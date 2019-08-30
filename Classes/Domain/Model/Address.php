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
 * Address
 */
class Address extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * street
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $street = '';

    /**
     * zip
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $zip = '';

    /**
     * town
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $town = '';

    /**
     * pOBox
     * 
     * @var string
     */
    protected $pOBox = '';

    /**
     * Returns the street
     * 
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     * 
     * @param string $street
     * @return void
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Returns the zip
     * 
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     * 
     * @param string $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns the town
     * 
     * @return string $town
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Sets the town
     * 
     * @param string $town
     * @return void
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * Returns the pOBox
     * 
     * @return string $pOBox
     */
    public function getPOBox()
    {
        return $this->pOBox;
    }

    /**
     * Sets the pOBox
     * 
     * @param string $pOBox
     * @return void
     */
    public function setPOBox($pOBox)
    {
        $this->pOBox = $pOBox;
    }
}
