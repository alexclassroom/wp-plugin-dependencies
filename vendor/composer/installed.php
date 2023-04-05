<?php return array(
    'root' => array(
        'name' => 'wordpress/wp-plugin-dependencies',
        'pretty_version' => 'dev-develop',
        'version' => 'dev-develop',
        'reference' => '43e43514a054406225e833ae62a71faa73414013',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'afragen/add-plugin-dependency-api' => array(
            'pretty_version' => '0.4.8',
            'version' => '0.4.8.0',
            'reference' => 'f88b8161528e7893a9de305077a52403a4c37e4d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../afragen/add-plugin-dependency-api',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'dealerdirect/phpcodesniffer-composer-installer' => array(
            'pretty_version' => 'v0.7.2',
            'version' => '0.7.2.0',
            'reference' => '1c968e542d8843d7cd71de3c5c9c3ff3ad71a1db',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../dealerdirect/phpcodesniffer-composer-installer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'squizlabs/php_codesniffer' => array(
            'pretty_version' => '3.6.0',
            'version' => '3.6.0.0',
            'reference' => 'ffced0d2c8fa8e6cdc4d695a743271fab6c38625',
            'type' => 'library',
            'install_path' => __DIR__ . '/../squizlabs/php_codesniffer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'wordpress/wp-plugin-dependencies' => array(
            'pretty_version' => 'dev-develop',
            'version' => 'dev-develop',
            'reference' => '43e43514a054406225e833ae62a71faa73414013',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wp-coding-standards/wpcs' => array(
            'pretty_version' => '2.3.0',
            'version' => '2.3.0.0',
            'reference' => '7da1894633f168fe244afc6de00d141f27517b62',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../wp-coding-standards/wpcs',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
