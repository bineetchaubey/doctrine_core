<?php
use Entity\Users;
use Entity\Posts;

require_once __DIR__."/../bootstrap.php";

$newUser =  new Users();

$newUser->setName("madan lal");
$newUser->setAddress("sarnath varanasi");

$entityManager->persist($newUser);

$newpost =  new Posts();

$newpost->setTitle("this is my first post");

$newpost->setBody("this is first post content and now i am going  to add post in database");

$entityManager->persist($newpost);

$newUser->addPost($newpost);

$entityManager->flush();

echo "this is update  in database";




