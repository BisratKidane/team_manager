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
 * PlayerController
 */
class PlayerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * playerRepository
     * 
     * @var \BisratK\TeamManager\Domain\Repository\PlayerRepository
     * @inject
     */
    protected $playerRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $players = $this->playerRepository->findAll();
        $this->view->assign('players', $players);
    }

    /**
     * action show
     * 
     * @param \BisratK\TeamManager\Domain\Model\Player $player
     * @return void
     */
    public function showAction(\BisratK\TeamManager\Domain\Model\Player $player)
    {
        $this->view->assign('player', $player);
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
     * @param \BisratK\TeamManager\Domain\Model\Player $newPlayer
     * @return void
     */
    public function createAction(\BisratK\TeamManager\Domain\Model\Player $newPlayer)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->playerRepository->add($newPlayer);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \BisratK\TeamManager\Domain\Model\Player $player
     * @ignorevalidation $player
     * @return void
     */
    public function editAction(\BisratK\TeamManager\Domain\Model\Player $player)
    {
        $this->view->assign('player', $player);
    }

    /**
     * action update
     * 
     * @param \BisratK\TeamManager\Domain\Model\Player $player
     * @return void
     */
    public function updateAction(\BisratK\TeamManager\Domain\Model\Player $player)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->playerRepository->update($player);
        $this->redirect('list');
    }
}
