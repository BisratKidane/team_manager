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
 * AddressController
 */
class AddressController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * addressRepository
     * 
     * @var \BisratK\TeamManager\Domain\Repository\AddressRepository
     * @inject
     */
    protected $addressRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $addresses = $this->addressRepository->findAll();
        $this->view->assign('addresses', $addresses);
    }

    /**
     * action show
     * 
     * @param \BisratK\TeamManager\Domain\Model\Address $address
     * @return void
     */
    public function showAction(\BisratK\TeamManager\Domain\Model\Address $address)
    {
        $this->view->assign('address', $address);
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
     * @param \BisratK\TeamManager\Domain\Model\Address $newAddress
     * @return void
     */
    public function createAction(\BisratK\TeamManager\Domain\Model\Address $newAddress)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->addressRepository->add($newAddress);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \BisratK\TeamManager\Domain\Model\Address $address
     * @ignorevalidation $address
     * @return void
     */
    public function editAction(\BisratK\TeamManager\Domain\Model\Address $address)
    {
        $this->view->assign('address', $address);
    }

    /**
     * action update
     * 
     * @param \BisratK\TeamManager\Domain\Model\Address $address
     * @return void
     */
    public function updateAction(\BisratK\TeamManager\Domain\Model\Address $address)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->addressRepository->update($address);
        $this->redirect('list');
    }
}
