<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// $paths = array("/path/to/entity-files");
$paths = array("D:/xampp/htdocs/ci/phporm/src");
//$paths = array("/src");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'ciorm',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

// return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
