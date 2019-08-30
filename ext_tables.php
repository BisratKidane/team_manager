<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'BisratK.TeamManager',
            'Myteam',
            'My Team'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('team_manager', 'Configuration/TypoScript', 'Team');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_teammanager_domain_model_club', 'EXT:team_manager/Resources/Private/Language/locallang_csh_tx_teammanager_domain_model_club.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_teammanager_domain_model_club');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_teammanager_domain_model_team', 'EXT:team_manager/Resources/Private/Language/locallang_csh_tx_teammanager_domain_model_team.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_teammanager_domain_model_team');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_teammanager_domain_model_activity', 'EXT:team_manager/Resources/Private/Language/locallang_csh_tx_teammanager_domain_model_activity.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_teammanager_domain_model_activity');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_teammanager_domain_model_address', 'EXT:team_manager/Resources/Private/Language/locallang_csh_tx_teammanager_domain_model_address.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_teammanager_domain_model_address');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_teammanager_domain_model_level', 'EXT:team_manager/Resources/Private/Language/locallang_csh_tx_teammanager_domain_model_level.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_teammanager_domain_model_level');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_teammanager_domain_model_role', 'EXT:team_manager/Resources/Private/Language/locallang_csh_tx_teammanager_domain_model_role.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_teammanager_domain_model_role');

    }
);
