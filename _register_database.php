<?php


use SilverStripe\Dev\Install\DatabaseAdapterRegistry;
use Textagroup\SilverStripe\Firebase\FirebaseConfigurationHelper;

$fields = array(
    'apiKey' => array(
        'title' => 'Service Account JSON',
        'envVar' => 'SS_FIREBASE_SERVICE_ACCOUNT_JSON',
        'default' => ''
    )
);

// Firebase database
DatabaseAdapterRegistry::register(array(
    'class' => 'FirebaseDatabase',
    'module' => 'framework',
    'title' => 'Firebase',
    'helperPath' => __DIR__.'/code/FirebaseDatabaseConfigurationHelper.php',
    'helperClass' => FirebaseConfigurationHelper::class,
    'supported' => (class_exists('Kreait\Firebase')),
    'missingExtensionText' =>
		'Missing Firebase library'
));
