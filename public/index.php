<?php declare(strict_types=1);

chdir(dirname(__DIR__ . '/..'));

(function () {
    define('USEFUL_START', microtime(true));
    require getcwd() . '/bootstrap/init.php';


})();