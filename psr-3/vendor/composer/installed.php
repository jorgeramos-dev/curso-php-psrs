<?php return array(
    'root' => array(
        'name' => 'eti/teste-monolog',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '8c1201b9878d93c76ad888fb064da7792d3bf81f',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'eti/teste-monolog' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '8c1201b9878d93c76ad888fb064da7792d3bf81f',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'monolog/monolog' => array(
            'pretty_version' => '3.5.0',
            'version' => '3.5.0.0',
            'reference' => 'c915e2634718dbc8a4a15c61b0e62e7a44e14448',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => '3.0.0',
            'version' => '3.0.0.0',
            'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '3.0.0',
            ),
        ),
    ),
);
