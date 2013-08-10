<?php
use Entity\Users;
require_once '../bootstrap.php';
// require_once '../src/Users.php';

$user = new  Users();
$user->setName('Mr. Bineet Kumar Chaubey');
$user->setAddress('Ahmedabad');
$entityManager->persist($user);
$entityManager->flush();

echo  "your use id id = ".$user->getId() ;
?>