<?php

use Entity\Users,
    Entity\Groups;

 require_once __DIR__."/../bootstrap.php";


 $newuser = new Users();
 $newuser->setName("jams swan");
 $newuser->setAddress("puschim vihar delhi");

 $entityManager->persist($newuser);

 $newgroup = new Groups();
 $newgroup->setName("Himalya");
 $newgroup->setDisplayName("Himalya displaynmae");
 
 $entityManager->persist($newgroup);

 $newuser->addMember($newgroup);

 $entityManager->flush();

 echo "data save  in table.".$newuser->getId()."   ".$newgroup->getId();






