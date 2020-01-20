<?php 

include( dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'user_management.php');

$userManager1 = new User_Management();
$userNumber1 = $userManager1->addUser();
header('location:viewUser.php');

?>

