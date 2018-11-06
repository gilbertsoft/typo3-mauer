<?php

/**
 * Extension Manager/Repository config file for ext "gsmauer".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Sitepackage Mauer-Klan',
    'description' => 'Sitepackage Vikings Mauer-Klan',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '*',
            'gswarranty' => '*',
            'gscacheconfig' => '*',
            'gsprotectedconfig' => '*',
            'gsfavicon' => '*'
            ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Gilbertsoft\\Mauer\\' => 'Classes'
        ],
    ],
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Simon Gilli',
    'author_email' => 'typo3@gilbertsoft.org',
    'author_company' => 'Gilbertsoft',
    'version' => '0.0.1',
];
