<?php
/**
 * Proxy service PHPUnit bootstrap.
 *
 * @author    Ere Maijala <ere.maijala@helsinki.fi>
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @copyright Copyright (C) The National Library of Finland 2022
 */
if (file_exists('vendor/autoload.php')) {
    require_once 'vendor/autoload.php';
}
$classLoader = new \Composer\Autoload\ClassLoader();
$classLoader->addPsr4('VuFind\\Marc\\Test\\', __DIR__, true);
$classLoader->register();
