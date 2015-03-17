<?php
spl_autoload_register('myAutoloader');

/**
 * Standard autoloader somewhat modeled on <http://www.php-fig.org/psr/psr-0/>,
 * but with less legacy cruft and other minor local differences.
 */
function myAutoloader($className)
{
    $path = 'include/';
    $className = str_replace('\\', '/', $className);
    require $path . $className . '.php';
}
