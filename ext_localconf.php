<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BisratK.TeamManager',
            'Myteam',
            [
                'Club' => 'show',
                'Team' => 'list, new, create, edit, update, delete',
                'Staff' => 'list',
                'Player' => 'list, show, new, create, edit, update',
                'Activity' => 'list, show, new, create, edit, update',
                'Address' => 'list, show, new, create, edit, update',
                'Role' => 'list, new, create, edit, update'
            ],
            // non-cacheable actions
            [
                'Club' => '',
                'Team' => 'create, update, delete',
                'Staff' => '',
                'Player' => 'create, update',
                'Activity' => 'create, update',
                'Address' => 'create, update',
                'Role' => 'create, update'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    myteam {
                        iconIdentifier = team_manager-plugin-myteam
                        title = LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:tx_team_manager_myteam.name
                        description = LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:tx_team_manager_myteam.description
                        tt_content_defValues {
                            CType = list
                            list_type = teammanager_myteam
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'team_manager-plugin-myteam',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:team_manager/Resources/Public/Icons/user_plugin_myteam.svg']
			);
		
    }
);
