<?php

namespace Textagroup\SilverStripe\Firebase;

use SilverStripe\Dev\Install\DatabaseAdapterRegistry;
use InvalidArgumentException;
use SilverStripe\Dev\Deprecation;

/**
 * This class keeps track of the available database adapters
 * and provides a meaning of registering community built
 * adapters in to the installer process.
 *
 * @author Tom Rix
 */
class FirebaseDatabaseAdapterRegistry extends DatabaseAdapterRegistry
{

    /**
     * Default database connector registration fields
     *
     * @var array
     */
    private static $default_fields = array(
        'server' => array(
            'title' => 'Database server',
            'envVar' => 'SS_DATABASE_SERVER',
            'default' => 'localhost'
        ),
        'username' => array(
            'title' => 'Database username',
            'envVar' => 'SS_DATABASE_USERNAME',
            'default' => 'root'
        ),
        'password' => array(
            'title' => 'Database password',
            'envVar' => 'SS_DATABASE_PASSWORD',
            'default' => 'password'
        ),
        'database' => array(
            'title' => 'Database name',
            'default' => 'SS_mysite',
            'attributes' => array(
                "onchange" => "this.value = this.value.replace(/[\/\\:*?&quot;<>|. \t]+/g,'');"
            )
        ),
    );
}
