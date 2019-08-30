<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:tx_teammanager_domain_model_address',
        'label' => 'street',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'street,zip,town,p_o_box',
        'iconfile' => 'EXT:team_manager/Resources/Public/Icons/tx_teammanager_domain_model_address.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, street, zip, town, p_o_box',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, street, zip, town, p_o_box'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_teammanager_domain_model_address',
                'foreign_table_where' => 'AND {#tx_teammanager_domain_model_address}.{#pid}=###CURRENT_PID### AND {#tx_teammanager_domain_model_address}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],

        'street' => [
            'exclude' => false,
            'label' => 'LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:tx_teammanager_domain_model_address.street',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'zip' => [
            'exclude' => false,
            'label' => 'LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:tx_teammanager_domain_model_address.zip',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'town' => [
            'exclude' => false,
            'label' => 'LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:tx_teammanager_domain_model_address.town',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'p_o_box' => [
            'exclude' => false,
            'label' => 'LLL:EXT:team_manager/Resources/Private/Language/locallang_db.xlf:tx_teammanager_domain_model_address.p_o_box',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
    
        'activity' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
