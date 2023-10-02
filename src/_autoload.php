<?php

/**
 * This file is a backwards compatible autoloader for SimpleSAMLphp.
 * Loads the Composer autoloader.
 *
 * @package SimpleSAMLphp
 */

declare(strict_types=1);

// SSP is loaded as a separate project
if (file_exists(dirname(__FILE__, 2) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__, 2) . '/vendor/autoload.php';
# unclear what the changes below do; but without them, UAA test's test set up step to log out all users within a "auth source" would fail on 500 (https://github.com/cloudfoundry/uaa/blob/2d2bb38bcb209baad15a039af8405037b729da6f/uaa/src/test/java/org/cloudfoundry/identity/uaa/integration/pageObjects/SamlLogoutAuthSourceEndpoint.java#L19)
} elseif (file_exists(dirname(__FILE__, 2) . '/libx/vendor/autoload.php')) {
    // SSP is loaded as a library.
    require_once dirname(__FILE__, 2) . '/libx/vendor/autoload.php';
} else {
    throw new Exception('Unable to load Composer autoloader');
}
