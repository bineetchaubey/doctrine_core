<?php
// cli-config.php
// require_once 'bootstrap.php';

// Any way to access the EntityManager from  your application
// $em = GetMyEntityManager();
// bootstrap.php


use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\ClassLoader;

require_once __DIR__ . '/vendor/autoload.php';
$loader = new ClassLoader('Entity', __DIR__.'/src' );
$loader->register();
$loader = new ClassLoader('EntityProxy', __DIR__ . '/src');
$loader->register();

$paths = array("src/Entity");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'coreDoctrine',
    'host' => '127.0.0.1',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
/**this use for reverse enginearing */
/*$driverImpl = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(array(__DIR__ ."/src/"));
$config->setMetadataDriverImpl($driverImpl);*/


 AnnotationRegistry::registerFile(__DIR__ . "/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php");
$reader = new AnnotationReader();
$driverImpl = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($reader, array(__DIR__ . "/src/Entity"));
$config->setMetadataDriverImpl($driverImpl);



$em = EntityManager::create($dbParams, $config);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));