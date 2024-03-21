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
    'tx_staffdirectoryorganization_city' => [
        'exclude' => false,
        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.city',
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
    ],
];

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
            tx_staffdirectoryorganization_city,
            tx_staffdirectoryorganization_email,
            tx_staffdirectoryorganization_telephone,
            tx_staffdirectoryorganization_opening_hours
    ',
    '',
    'after:description'
);