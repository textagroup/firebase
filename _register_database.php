<?php


use SilverStripe\Dev\Install\DatabaseAdapterRegistry;
use SilverStripe\Firebase\FirebaseConfigurationHelper;
use SilverStripe\Firebase\FirebaseDatabaseAdapterRegistry;


// Firebase database
FirebaseDatabaseAdapterRegistry::register(array(
    'class' => 'FirebaseDatabase',
    'module' => 'framework',
    'title' => 'Firebase',
    'helperPath' => __DIR__.'/code/FirebaseDatabaseConfigurationHelper.php',
    'helperClass' => FirebaseConfigurationHelper::class,
    'supported' => (class_exists('Kreait\Firebase')),
    'missingExtensionText' =>
		'Missing Firebase library'
));
