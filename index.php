<?php 
require "inc/Autoloader.php";

//J'initialise l'autoloader 
Autoloader::init();


// $Sara=new Person("buzenyaki", "Sara");


$config = Config::getInstance();
$session= Session::getInstance();
$session->set("id",1);
$session->unset("idfd");
echo "<pre>" ;
print_r($_SESSION);
echo "</pre>";