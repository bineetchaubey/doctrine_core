<?php
// bootstrap.php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Configuration;
use Doctrine\Common\Cache\ArrayCache as Cache;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\ClassLoader;

 
//autoloading
require_once __DIR__ . '/vendor/autoload.php';
$loader = new ClassLoader('Entity', __DIR__.'/src' );
$loader->register();
$loader = new ClassLoader('EntityProxy', __DIR__ . '/src');
$loader->register();



/*$paths = array(__DIR__."/src/Entity");
$isDevMode = false;*/

//configuration
$config = new Configuration();
$cache = new Cache();
$config->setQueryCacheImpl($cache);
$config->setProxyDir(__DIR__ . '/src/EntityProxy');
$config->setProxyNamespace('EntityProxy');
$config->setAutoGenerateProxyClasses(true);

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'coreDoctrine',
    'host' => '127.0.0.1',
);

// $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

AnnotationRegistry::registerFile(__DIR__ . '/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php');
$driver = new Doctrine\ORM\Mapping\Driver\AnnotationDriver(
    new Doctrine\Common\Annotations\AnnotationReader(),
    array(__DIR__ . '/src/Entity')
);
$config->setMetadataDriverImpl($driver);
$config->setMetadataCacheImpl($cache);


$entityManager = EntityManager::create($dbParams, $config);