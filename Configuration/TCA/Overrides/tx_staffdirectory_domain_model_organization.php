<?php
defined('TYPO3') || die();

$tempColumns = [
    'tx_staffdirectoryorganization_address' => [
        'exclude' => false,
        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.address',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'max' => 100,
        ],
    ],
    'tx_staffdirectoryorganization_postal_code' => [
        'exclude' => false,
        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.zip',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim',
            'max' => 10,
        ],
    ],
    'tx_staffdirectoryorganization_locality' => [
        'exclude' => false,
        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.locality',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim',
            'max' => 10,
        ],
    ],
    'tx_staffdirectoryorganization_email' => [
        'exclude' => false,
        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'nospace',
            'max' => 80,
        ],
    ],
    'tx_staffdirectoryorganization_telephone' => [
        'exclude' => false,
        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.phone',
        'config' => [
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 20,
        ],
    ],
    'tx_staffdirectoryorganization_opening_hours' => [
        'exclude' => false,
        'label' => 'LLL:EXT:staffdirectory_organization/Resources/Private/Language/locallang_db.xlf:tx_staffdirectory_domain_model_organization.opening_hours',
        'config' => [
            'type' => 'text',
            'enableRichtext' => true,
            'cols' => 30,
            'rows' => 4,
        ],
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_staffdirectory_domain_model_organization',
    [
        'tx_staffdirectoryorganization_image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.images',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'tx_staffdirectoryorganization_image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.images',
                        'fileUploadAllowed' => true,
                        'maxitems' => 5,
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette
                                ',
                            ],
                        ],
                    ],
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_staffdirectory_domain_model_organization',
    'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.images,
        tx_staffdirectoryorganization_image,',
    '',
    'after:description'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_staffdirectory_domain_model_organization',
    $tempColumns
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_staffdirectory_domain_model_organization',
    '
        --div--;LLL:EXT:staffdirectory_organization/Resources/Private/Language/locallang_db.xlf:tabs.contact,
            tx_staffdirectoryorganization_address,
            tx_staffdirectoryorganization_postal_code,
            tx_staffdirectoryorganization_locality,
            tx_staffdirectoryorganization_email,
            tx_staffdirectoryorganization_telephone,
            tx_staffdirectoryorganization_opening_hours
    ',
    '',
    'after:tx_staffdirectoryorganization_image'
);
