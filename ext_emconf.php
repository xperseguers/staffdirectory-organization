<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Organizations for Staff Directory',
    'description' => 'Additional information for managing organizations.',
    'category' => 'plugin',
    'author' => 'Xavier Perseguers',
    'author_email' => 'xavier@causal.ch',
    'author_company' => 'Causal Sàrl',
    'state' => 'stable',
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'php' => '7.4.0-8.2.99',
            'typo3' => '11.5.0-12.4.99',
            'staffdirectory' => '2.0.0-'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
