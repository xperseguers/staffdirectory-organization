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
        'label' => 'LLL:EXT:staffdirectory_organization/Resources/Private/Language/locallang_db.xlf:tx_staffdirectory_domain_model_organization.locality',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim',
            'max' => 50,
        ],
    ],
    'tx_staffdirectoryorganization_website' => [
        'exclude' => false,
        'label' => 'LLL:EXT:staffdirectory_organization/Resources/Private/Language/locallang_db.xlf:tx_staffdirectory_domain_model_organization.website',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'max' => 100,
            'softref' => 'typolink',
            'placeholder' => 'https://www.domain.tld',
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
    'tx_staffdirectoryorganization_images' => [
        'exclude' => false,
        'label' => 'LLL:EXT:staffdirectory_organization/Resources/Private/Language/locallang_db.xlf:tabs.media',
        'l10n_mode' => 'exclude',
    ],
];
$typo3Version = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getMajorVersion();
if ($typo3Version >= 12) {
    $tempColumns['tx_staffdirectoryorganization_images']['config'] =
        [
            'type' => 'file',
            'maxitems' => 5,
            'minitems' => 0,
            'allowed' => 'jpg,jpeg,png,gif,webp,svg,webm,mp4,mov,avi,wmv,youtube,vimeo,ogg',
        ];
} else {
    $tempColumns['tx_staffdirectoryorganization_images']['config'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
        'tx_staffdirectoryorganization_images',
        [
            'maxitems' => 5,
            'minitems' => 0
        ],
        'jpg,jpeg,png,gif,webp,svg,webm,mp4,mov,avi,wmv,youtube,vimeo,ogg'
    );
}
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
            tx_staffdirectoryorganization_website,
            tx_staffdirectoryorganization_opening_hours,
        --div--;LLL:EXT:staffdirectory_organization/Resources/Private/Language/locallang_db.xlf:tabs.media,
            tx_staffdirectoryorganization_images,
    ',
    '',
    'after:description'
);
