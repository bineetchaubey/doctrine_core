<?php

use Entity\Users,
    Entity\Groups;

 require_once __DIR__."/../bootstrap.php";


 $objuser = $entityManager->find('Entity\Users',6);


 /**
   echo "<pre>";
   var_dump($objuser);
   die();
 **/

 $a = array(1 => 2, 2 => 2 );
 
 for($i=1; $i<=2;$i++){
	 $objgroup = $entityManager->find('Entity\Groups',$a[$i]);
	 $objuser->addMember($objgroup);
         echo $i.PHP_EOL;
	 echo $a[$i].PHP_EOL;
 }
 
 $entityManager->flush();

 echo "data save  in table.".$objuser->getId();






