<?php

/*
    The idea here is you install XenForo in the folder xenforo and have it point one level
    up for the config file. To do this change..

        XenForo_Application::initialize($fileDir . '/library', $fileDir);
    
    to...
        
        XenForo_Application::initialize($fileDir . '/../', $fileDir);

    in index.php, admin.php, css.php, payment_callback.php, deferred.php and install/index.php

    Then in this file we will create the composer autoloader and setup xf-sync which will sync all changes
    when using the ACP into this working directory.

    PROTIP: put xenforo into a private repository and make these changes. Symlink for each addon you work on.
*/

require __DIR__.'/vendor/autoload.php';
new Robbo\XfSync\XenForoSync(__DIR__);

$config['db']['host'] = 'localhost';
$config['db']['port'] = '3306';
$config['db']['username'] = '';
$config['db']['password'] = '';
$config['db']['dbname'] = '';

$config['superAdmins'] = '1';