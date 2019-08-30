<?php
defined('TYPO3_MODE') || die();

if (!isset($GLOBALS['TCA']['fe_users']['ctrl']['type'])) {
    // no type field defined, so we define it here. This will only happen the first time the extension is installed!!
    $GLOBALS['TCA']['fe_users']['ctrl']['type'] = 'tx_extbase_type';
    $tempColumnstx_teammanager_fe_users = [];
    $tempColumnstx_teammanager_fe_users[$GLOBALS['TCA']['fe_users']['ctrl']['type']] = [
        'exclude' => true,
        'label'   => 'LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:tx_teammanager.tx_extbase_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['',''],
                ['Staff','Tx_TeamManager_Staff']
            ],
            'default' => 'Tx_TeamManager_Staff',
            'size' => 1,
            'maxitems' => 1,
        ]
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tempColumnstx_teammanager_fe_users);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'fe_users',
    $GLOBALS['TCA']['fe_users']['ctrl']['type'],
    '',
    'after:' . $GLOBALS['TCA']['fe_users']['ctrl']['label']
);

$tmp_team_manager_columns = [

    'roles' => [
        'exclude' => false,
        'label' => 'LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:tx_teammanager_domain_model_staff.roles',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_teammanager_domain_model_role',
            'foreign_field' => 'staff',
            'maxitems' => 9999,
            'appearance' => [
                'collapseAll' => 0,
                'levelLinksPosition' => 'top',
                'showSynchronizationLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'showAllLocalizationLink' => 1
            ],
        ],

    ],

];

$tmp_team_manager_columns['club'] = [
    'config' => [
        'type' => 'passthrough',
    ]
];
$tmp_team_manager_columns['team'] = [
    'config' => [
        'type' => 'passthrough',
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users',$tmp_team_manager_columns);

/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['fe_users']['types']['0']['showitem'])) {
    $GLOBALS['TCA']['fe_users']['types']['Tx_TeamManager_Staff']['showitem'] = $GLOBALS['TCA']['fe_users']['types']['0']['showitem'];
} elseif(is_array($GLOBALS['TCA']['fe_users']['types'])) {
    // use first entry in types array
    $fe_users_type_definition = reset($GLOBALS['TCA']['fe_users']['types']);
    $GLOBALS['TCA']['fe_users']['types']['Tx_TeamManager_Staff']['showitem'] = $fe_users_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['fe_users']['types']['Tx_TeamManager_Staff']['showitem'] = '';
}
$GLOBALS['TCA']['fe_users']['types']['Tx_TeamManager_Staff']['showitem'] .= ',--div--;LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:tx_teammanager_domain_model_staff,';
$GLOBALS['TCA']['fe_users']['types']['Tx_TeamManager_Staff']['showitem'] .= 'roles';

$GLOBALS['TCA']['fe_users']['columns'][$GLOBALS['TCA']['fe_users']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_TeamManager_Staff','Tx_TeamManager_Staff'];

/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['fe_users']['types']['0']['showitem'])) {
    $GLOBALS['TCA']['fe_users']['types']['Tx_TeamManager_Player']['showitem'] = $GLOBALS['TCA']['fe_users']['types']['0']['showitem'];
} elseif(is_array($GLOBALS['TCA']['fe_users']['types'])) {
    // use first entry in types array
    $fe_users_type_definition = reset($GLOBALS['TCA']['fe_users']['types']);
    $GLOBALS['TCA']['fe_users']['types']['Tx_TeamManager_Player']['showitem'] = $fe_users_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['fe_users']['types']['Tx_TeamManager_Player']['showitem'] = '';
}
$GLOBALS['TCA']['fe_users']['types']['Tx_TeamManager_Player']['showitem'] .= ',--div--;LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:tx_teammanager_domain_model_player,';
$GLOBALS['TCA']['fe_users']['types']['Tx_TeamManager_Player']['showitem'] .= '';

$GLOBALS['TCA']['fe_users']['columns'][$GLOBALS['TCA']['fe_users']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_TeamManager_Player','Tx_TeamManager_Player'];
