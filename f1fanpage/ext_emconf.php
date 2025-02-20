<?php

/**
 * Extension Manager/Repository config file for ext "f1fanpage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'F1Fanpage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fhooe24\\F1fanpage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Annika Mauser',
    'author_email' => 's2310456032@fhooe.at',
    'author_company' => 'fhooe24',
    'version' => '1.0.0',
];
